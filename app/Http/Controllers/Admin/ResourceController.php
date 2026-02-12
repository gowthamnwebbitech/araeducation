<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resource;
use Illuminate\Support\Str;
use Redirect;
use Validator;

class ResourceController extends Controller
{
    
    public function index(Request $request)
    {
        $resource    = Resource::latest();
        $resource = $resource->get();
        return view('admin.resource.index', compact('resource'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resource.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resource       = new Resource;
        // print_r($request->hasFile('file1')); exit();
        if ($request->hasFile('file1')) {
            $image = $request->file('file1');
            $fileName = date('YmdHis') . '.' .  $image->Extension();
            $image->move(public_path('resource_images'), $fileName);
            $resource->image = $fileName;
        }

        if ($request->hasFile('file2')) {
            $image1 = $request->file('file2');
            $fileName_pdf = date('YmdHis') . '.' .  $image1->Extension();
            $image1->move(public_path('resource_files'), $fileName_pdf);
            $resource->pdf_file = $fileName_pdf;
        }

        $resource->title              = $request->title;
        $resource->slug               = Str::slug($request->title);
        $resource->meta_title         = $request->meta_title;
        $resource->meta_keyword       = $request->meta_keyword;
        $resource->meta_description   = $request->meta_description;
        $resource->description        = $request->description;
        $resource->short_description  = $request->short_description;
        $resource->save();
        
        

        if($resource->save()){
            return redirect()->route('resource.index')->with('success', 'Resource has been added successfully');
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
        $resource = Resource::findOrFail(decrypt($id));
        return view('admin.resource.edit',compact('resource'));
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
        // Correct variable name to $resource
        $resource = Resource::findOrFail($id);
        
        if ($request->hasFile('file1')) {
            $image = $request->file('file1');
            $fileName = date('YmdHis') . '.' . $image->extension(); // Corrected method name to `extension()`
            $image->move(public_path('resource_images'), $fileName);
            $resource->image = $fileName;
        }


        if ($request->hasFile('file2')) {
            $image1 = $request->file('file2');
            $fileName_pdf = date('YmdHis') . '.' .  $image1->Extension();
            $image1->move(public_path('resource_files'), $fileName_pdf);
            $resource->pdf_file = $fileName_pdf;
        }

    
        // Update fields
        $resource->title              = $request->title;
        $resource->slug               = Str::slug($request->title);
        $resource->meta_title         = $request->meta_title;
        $resource->meta_keyword       = $request->meta_keyword;
        $resource->meta_description   = $request->meta_description;
        $resource->description        = $request->description;
        $resource->short_description  = $request->short_description;
    
        // Save the updated record
        if ($resource->save()) {
            return redirect()->route('resource.index')->with('success', 'Resource has been updated successfully');
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
        $resource = Resource::findOrFail($id);
    
        if ($resource->delete()) {
            return redirect()->route('resource.index')->with('danger', 'Resource has been deleted successfully');
        } else {
            return back();
        }
    }
    
    

}
