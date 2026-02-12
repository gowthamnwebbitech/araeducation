<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Upload;
use Redirect;
use Validator;

class BlogController extends Controller
{
    
    public function index(Request $request)
    {
        $blog    = Blog::latest();
        $blog = $blog->get();
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog       = new Blog;
        // print_r($request->hasFile('file1')); exit();
        if ($request->hasFile('file1')) {
            $image = $request->file('file1');
            $fileName = date('YmdHis') . '.' .  $image->Extension();
            $image->move(public_path('blog_images'), $fileName);
            $blog->image = $fileName;
        }
        $blog->title              = $request->title;
        $blog->slug               = Str::slug($request->title);
        $blog->meta_title         = $request->meta_title;
        $blog->meta_keyword       = $request->meta_keyword;
        $blog->meta_description   = $request->meta_description;
        $blog->description        = $request->description;
        $blog->short_description  = $request->short_description;
        $blog->save();
        
        

        if($blog->save()){
            return redirect()->route('blog.index')->with('success', 'Blog has been added successfully');
        } else {
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail(decrypt($id));
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Correct variable name to $blog
        $blog = Blog::findOrFail($id);
        
        if ($request->hasFile('file1')) {
            $image = $request->file('file1');
            $fileName = date('YmdHis') . '.' . $image->extension(); // Corrected method name to `extension()`
            $image->move(public_path('blog_images'), $fileName);
            $blog->image = $fileName;
        }
    
        // Update fields
        $blog->title              = $request->title;
        $blog->slug               = Str::slug($request->title);
        $blog->meta_title         = $request->meta_title;
        $blog->meta_keyword       = $request->meta_keyword;
        $blog->meta_description   = $request->meta_description;
        $blog->description        = $request->description;
        $blog->short_description  = $request->short_description;
    
        // Save the updated record
        if ($blog->save()) {
            return redirect()->route('blog.index')->with('success', 'Blog has been updated successfully');
        } else {
            return back()->with('error', 'Failed to update the gallery image.');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
    
        if ($blog->delete()) {
            return redirect()->route('blog.index')->with('danger', 'Blog has been deleted successfully');
        } else {
            return back();
        }
    }
    
    

}
