<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use App\Models\NewsEvents;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Career;
use App\Models\Setting;
use Dompdf\Dompdf;
use Carbon\Carbon;
use Validator;
use Mail;
use PDF;


class VistaController extends Controller
{
    public function getCountries(Request $request)
    {
        $country = Country::all();
        return response()->json($country);
    }
    
    
    public function contact(Request $request)
    {
        $userdata = [
            'firstName'      => $request->firstName,
            'lastName'       => $request->lastName,
            'phone'          => $request->phone,
            'email'          => $request->email,
            'company'        => $request->company,
            'country'        => $request->country,
            'contactMessage' => $request->message, // Updated key
        ];
    
        try {
            Mail::send('emails.contact', $userdata, function ($message) use ($userdata) {
                $message->from($userdata['email'], 'Vistaes')
                        ->to('info@vistaes.com')
                        ->subject('Contact Form');
            });
    
            $response = ['status' => true];
        } catch (\Exception $e) {
            print_r($e->getMessage()); exit();
            \Log::error('Mail error: ' . $e->getMessage());
            $response = ['status' => false];
        }
    
        return response()->json($response);
    }
    
    
    public function newsletter(Request $request)
    {
        $newsletter = $request->email;
        try {
        Mail::send('emails.newsletter_mail', ['newsletter' => $newsletter], function ($message) use ($newsletter) {
                        $message->from($newsletter, 'Vistaes') 
                            ->to('info@vistaes.com')
                            ->subject('Newsletter Subscription');
                    });
        $response = ['status' => true];
        } 
        catch (\Exception $e) {
            print_r($e->getMessage());
            $response = ['status' => false];
        }
        return response()->json($response);
    }
    


    
    public function sentCount(Request $request)
    {
        $setting = Setting::where('id', 1)->first();

        if ($setting) {
            $setting->view_count += $request->count;
            $setting->save();
            
            return $response = [
                'status' => true,
                'count' => $setting->view_count
                
            ];
        } 
        else 
        {
            return $response = [
                'status' => false
                
            ];
        }
    }
    
    
    public function getCount(Request $request)
    {
        $setting = Setting::where('id', 1)->first();

        if ($setting) {
            
            return $response = [
                'status' => true,
                'count' => $setting->view_count
                
            ];
        } 
        else 
        {
            return $response = [
                'status' => false
                
            ];
        }
    }
    
    public function career(Request $request)
    {
        // print_r($request->job_id); exit();
        
        $getjob = Career::where('id',$request->job_id)->first();
        // print_r($getjob->name); exit();
        $userdata = [
            'firstName'      => $request->firstName,
            'lastName'       => $request->lastName,
            'phone'          => $request->phone,
            'email'          => $request->email,
            'contactMessage' => $request->message,
            'JobTitle'       => $getjob->name,
        ];
        
        
        $attachment = $request->file('resume');
        //  print_r($attachment); exit();
    
        try {
            Mail::send('emails.resume', $userdata, function ($message) use ($userdata, $attachment) {
                $message->from($userdata['email'], 'Vistaes')
                        ->to('info@vistaes.com')
                        ->subject('Career Form');
    
                if ($attachment) {
                    $message->attach($attachment->getRealPath(), [
                        'as' => $attachment->getClientOriginalName(),
                        'mime' => $attachment->getMimeType(),
                    ]);
                }
            });
    
            $response = ['status' => true];
        } catch (\Exception $e) {
            \Log::error('Mail error: ' . $e->getMessage());
            $response = ['status' => false];
        }
    
        return response()->json($response);
    }

    
    public function getNewsEvents(Request $request)
    {
        $news_an_events = NewsEvents::latest()->get();
    
        $news_an_events->transform(function ($item, $key) {
            $item->image_url = url('') . '/public/news_events_images/' . $item->image;
    
            $item->news_month = strtoupper(\Carbon\Carbon::parse($item->news_date)->format('M'));
            $item->month_date = \Carbon\Carbon::parse($item->news_date)->format('d'); 
    
            unset($item->image, $item->created_at, $item->updated_at, $item->deleted_at);
    
            return $item;
        });
    
        return response()->json($news_an_events);
    }
    
    
    public function getNewsEventDetails(Request $request, $id)
    {
        // $id = $request->news_an_events_id;
        
        $news_event = NewsEvents::find($id);
    
        if (!$news_event) {
            return response()->json(['message' => 'News event not found'], 404);
        }
    
        $news_event->image_url = url('') . '/public/news_events_images/' . $news_event->image;
    
        $news_event->news_month = strtoupper(\Carbon\Carbon::parse($news_event->news_date)->format('M'));
        $news_event->month_date = \Carbon\Carbon::parse($news_event->news_date)->format('d'); 
    
        unset($news_event->image, $news_event->created_at, $news_event->updated_at, $news_event->deleted_at);
    
        return response()->json($news_event);
    }
    
    
    public function getBlog(Request $request)
    {
        $news_an_events = Blog::latest()->get();
    
        $news_an_events->transform(function ($item, $key) {
            $item->image_url = url('') . '/public/blog_images/' . $item->image;
    
            $item->news_month = strtoupper(\Carbon\Carbon::parse($item->news_date)->format('M'));
            $item->month_date = \Carbon\Carbon::parse($item->news_date)->format('d'); 
    
            unset($item->image, $item->created_at, $item->updated_at, $item->deleted_at);
    
            return $item;
        });
    
        return response()->json($news_an_events);
    }
    
    
    public function getBlogDetails(Request $request, $id)
    {
        // $id = $request->blog_id;
        
        $blogs = Blog::find($id);
    
        if (!$blogs) {
            return response()->json(['message' => 'Blog not found'], 404);
        }
    
        $blogs->image_url = url('') . '/public/blog_images/' . $blogs->image;
    
        $blogs->news_month = strtoupper(\Carbon\Carbon::parse($blogs->news_date)->format('M'));
        $blogs->month_date = \Carbon\Carbon::parse($blogs->news_date)->format('d'); 
    
        unset($blogs->image, $blogs->created_at, $blogs->updated_at, $blogs->deleted_at);
    
        return response()->json($blogs);
    }
    
    
    
    public function getBlogSearch(Request $request)
    {
        $title = $request->key_word;
        
        $blogs = Blog::where('title', 'LIKE', '%' . $title . '%')->get();
        
        if ($blogs->isEmpty()) {
            return response()->json(['message' => 'Blog not found'], 404);
        }
        
        $blogs->each(function ($blog) {
            $blog->image_url = url('') . '/public/blog_images/' . $blog->image;
    
            $blog->news_month = strtoupper(\Carbon\Carbon::parse($blog->news_date)->format('M'));
            $blog->month_date = \Carbon\Carbon::parse($blog->news_date)->format('d');
    
            unset($blog->image, $blog->created_at, $blog->updated_at, $blog->deleted_at);
        });
    
        return response()->json($blogs);
    }
    
    
    
    public function getNewsEventSearch(Request $request)
    {
        $title = $request->key_word;
        
        $news_events = NewsEvents::where('title', 'LIKE', '%' . $title . '%')->get();
        
        if ($news_events->isEmpty()) {
            return response()->json(['message' => 'News event found'], 404);
        }
        
        $news_events->each(function ($news_event) {
            $news_event->image_url = url('') . '/public/news_events_images/' . $news_event->image;
    
            $news_event->news_month = strtoupper(\Carbon\Carbon::parse($news_event->news_date)->format('M'));
            $news_event->month_date = \Carbon\Carbon::parse($news_event->news_date)->format('d');
    
            unset($news_event->image, $news_event->created_at, $news_event->updated_at, $news_event->deleted_at);
        });
    
        return response()->json($news_events);
    }





    public function getCareer(Request $request)
    {
        $career = Career::latest()->get();
        return response()->json($career);
    }
    
    
    public function getCategory(Request $request)
    {
        $categories = category::where('status',1)->latest()->get();
    
        if($categories)
        {
            return response()->json($categories);
        }
        else
        {
            return $response = [
                'status' => false,
                'data' => 'categories not found'
                
            ];
        }
    
        
    }
    
    
    public function getSubCategory(Request $request, $id)
    {
        $subcategories = SubCategory::where('status', 1)
                            ->where('category_id', $id)
                            ->with('category:id,name') 
                            ->latest()
                            ->get();
        
        if ($subcategories->isNotEmpty()) {
            $data = $subcategories->map(function ($subcategory) {
                return [
                    'id' => $subcategory->id,
                    'category_id' => $subcategory->category_id,
                    'subcategory' => $subcategory->name,
                    'status' => $subcategory->status,
                    'created_at' => $subcategory->created_at,
                    'updated_at' => $subcategory->updated_at,
                    'deleted_at' => $subcategory->deleted_at,
                    'category_name' => $subcategory->category->name ?? 'N/A' 
                ];
            });
    
            return response()->json($data);
        } else {
            return [
                'status' => false,
                'data' => 'No data found'
            ];
        }
    }
    
    
    public function getBanner(Request $request)
    {
        $banners = Banner::where('status', 1)->latest()->get();
    
        if ($banners->isNotEmpty()) {
            $data = $banners->map(function ($banner) {
                return [
                    'id' => $banner->id,
                    'title' => $banner->title,
                    'image' => asset('public/banner_image/' . $banner->image),
                    'status' => $banner->status,
                    'created_at' => $banner->created_at
                ];
            });
    
            return response()->json($data);
        } else {
            return [
                'status' => false,
                'data' => 'banner not found'
            ];
        }
    }


    
    
    
    
    
    
}


