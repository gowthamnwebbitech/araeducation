<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class LandingPageController extends Controller
{   
    public function index(){
        $pages = ['landing_1', 'landing_2', 'landing_3'];
        $values = LandingPage::whereIn('page_name', $pages)->get()->keyBy('slug');
        (new LandingPageController)->updateSitemap();
        return view('admin.landing-pages.index', compact('pages','values'));
    }

    public function create()
    {
        $pages = ['landing_1', 'landing_2', 'landing_3'];
        $categories = Category::where('status','Active')->get();

        return view('admin.landing-pages.create', compact('pages','categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'url_slug' => 'required|string|max:255|unique:landing_pages,slug',
            'meta_title' => 'nullable|string|max:255',
            'product_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $landingPage = new LandingPage();
        $landingPage->category_id = $request->category_id;
        $landingPage->page_name = $request->page_name;
        $landingPage->name = $request->name;
        $landingPage->slug = $request->url_slug;
        $landingPage->banner_description = $request->banner_description;
        $landingPage->banner_link = $request->banner_link;
        $landingPage->page_description = $request->page_description;
        $landingPage->faq = $request->faq ? json_encode($request->faq) : null;
        $landingPage->meta_title = $request->meta_title;
        $landingPage->meta_description = $request->meta_description;
        $landingPage->meta_keyword = $request->meta_keyword;
        $landingPage->status = $request->status;

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/landing_pages'), $filename);
            $landingPage->product_image = 'uploads/landing_pages/' . $filename;
        }

        $landingPage->save();
        (new LandingPageController)->updateSitemap();
        return redirect()->route('landing.index')->with('success', 'Landing Page saved successfully!');
    }

    public function edit($id){
        $pages = ['landing_1', 'landing_2', 'landing_3'];
        $categories = Category::where('status','Active')->get();
        $value = LandingPage::find($id);
       if($value){
           return view('admin.landing-pages.edit', compact('value','pages','categories'));
       }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'      => 'required|string',
            'name'             => 'required|string|max:255',
            'url_slug'         => 'required|string|max:255|unique:landing_pages,slug,' . $id,
            'banner_description' => 'nullable|string',
            'banner_link'      => 'nullable|string',
            'page_description' => 'nullable|string',
            'faq'              => 'nullable|array',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keyword'     => 'nullable|string|max:255',
            'status'           => 'required|in:Active,In Active',
            'product_image'    => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $landingPage = LandingPage::findOrFail($id);

        if ($request->hasFile('product_image')) {
            if ($landingPage->product_image && file_exists(public_path($landingPage->product_image))) {
                unlink(public_path($landingPage->product_image));
            }

            $imageName = time() . '_' . $request->file('product_image')->getClientOriginalName();
            $request->file('product_image')->move(public_path('uploads/landing-pages'), $imageName);
            $landingPage->product_image = 'uploads/landing-pages/' . $imageName;
        }

        $landingPage->page_name         = $request->page_name;
        $landingPage->category_id       = $request->category_id;
        $landingPage->name              = $request->name;
        $landingPage->slug              = $request->url_slug;
        $landingPage->banner_description= $request->banner_description;
        $landingPage->banner_link       = $request->banner_link;
        $landingPage->page_description  = $request->page_description;
        $landingPage->faq               = $request->faq ? json_encode($request->faq) : null;
        $landingPage->meta_title        = $request->meta_title;
        $landingPage->meta_description  = $request->meta_description;
        $landingPage->meta_keyword      = $request->meta_keyword;
        $landingPage->status            = $request->status;

        $landingPage->save();
        (new LandingPageController)->updateSitemap();
        return redirect()->route('landing.index')
                        ->with('success', 'Landing Page updated successfully.');
    }

    public function destroy($id)
    {
        $landingPage = LandingPage::findOrFail($id);

        if ($landingPage->product_image && file_exists(public_path($landingPage->product_image))) {
            unlink(public_path($landingPage->product_image));
        }

        $landingPage->delete();

        return redirect()->route('landing.index')
                        ->with('success', 'Landing Page deleted successfully.');
    }

    public function downloadSitemap()
    {
        $file = base_path('sitemap.xml');
        if (file_exists($file)) {
            return response()->download($file, 'sitemap.xml', [
                'Content-Type' => 'application/xml',
            ]);
        }

        return redirect()->back()->with('error', 'Sitemap file not found.');
    }

    public function uploadSitemap(Request $request)
    {
        $request->validate([
            'sitemap' => 'required|mimes:xml|max:2048',
        ]);

        $path = base_path('sitemap.xml');

        if (File::exists($path)) {
            File::delete($path);
        }

        $request->file('sitemap')->move(base_path(), 'sitemap.xml');

        return back()->with('success', 'Sitemap replaced successfully in root directory.');
    }

    protected function updateSitemap()
    {
        $pages = LandingPage::where('status', 'Active')
            ->get()
            ->unique('slug');

        $xml = new \SimpleXMLElement(
            '<?xml version="1.0" encoding="UTF-8"?><urlset/>'
        );

        $xml->addAttribute(
            'xmlns',
            'http://www.sitemaps.org/schemas/sitemap/0.9'
        );

        // 🔹 Home page
        $url = $xml->addChild('url');
        $url->addChild('loc', htmlspecialchars(URL::to('/'), ENT_XML1));
        $url->addChild('lastmod', now()->toAtomString());
        $url->addChild('priority', '1.00');

        // 🔹 Pages
        foreach ($pages as $page) {
            $url = $xml->addChild('url');

            $url->addChild(
                'loc',
                htmlspecialchars(URL::to($page->slug), ENT_XML1)
            );

            $url->addChild(
                'lastmod',
                optional($page->updated_at)->toAtomString() ?? now()->toAtomString()
            );

            $url->addChild('priority', '0.80');
        }

        // 🔹 Beautify XML
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml->asXML());

        // 🔹 Save to project root
        $dom->save(base_path('sitemap.xml'));
    }
}
