<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageGallery;
use Redirect;
use Validator;

class ImageController extends Controller
{
    
    public function index(Request $request)
    {
        $imageGallery    = ImageGallery::latest();
        $imageGallery    = $imageGallery->get();
        return view('admin.imageGallery.index', compact('imageGallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageGallery             = new ImageGallery;
        $imageGallery->order_number     = $request->order_number;
        $imageGallery->status     = $request->status;
        
        if ($request->hasFile('image')) {
            $image        = $request->file('image');
            $fileName     = date('YmdHis') . '.' .  $image->Extension();
            $image->move(public_path('gallery_images'), $fileName);
            $imageGallery->image = $fileName;
        }

        if($imageGallery->save()){
            return redirect()->route('imageGallery.index')->with('success', 'Image has been added successfully');
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
        $imageGallery = ImageGallery::findOrFail(decrypt($id));
        return view('admin.imageGallery.edit',compact('imageGallery'));
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
        $imageGallery         = ImageGallery::findOrFail($id);
        
        $imageGallery->order_number = $request->order_number;
        $imageGallery->status = $request->status;
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $oldImagePath = public_path('gallery_images/' . $imageGallery->image);
            if (file_exists($oldImagePath) && !empty($imageGallery->image)) {
                unlink($oldImagePath);
            }
    
            // Upload the new image
            $image    = $request->file('image');
            $fileName = date('YmdHis') . '.' . $image->extension();
            $image->move(public_path('gallery_images'), $fileName);
    
            // Update the image field in the database
            $imageGallery->image = $fileName;
        }
    
        // Save the updated Image
        if ($imageGallery->save()) {
            return redirect()->route('imageGallery.index')->with('success', 'Image have been updated successfully.');
        } else {
            return back()->with('error', 'Failed to update the Image.');
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
        $imageGallery = ImageGallery::findOrFail($id);
    
        if (!empty($imageGallery->image)) {
            $imagePath = public_path('gallery_images/' . $imageGallery->image);
    
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        if ($imageGallery->delete()) {
            return redirect()->route('imageGallery.index')->with('danger', 'Image have been deleted successfully.');
        } else {
            return back()->with('error', 'Failed to delete the imageGallery.');
        }
    }

}
