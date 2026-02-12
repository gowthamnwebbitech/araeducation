<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoGallery;
use Redirect;
use Validator;

class VideoController extends Controller
{
    
    public function index(Request $request)
    {
        $videoGallery    = VideoGallery::latest();
        $videoGallery = $videoGallery->get();
        return view('admin.videoGallery.index', compact('videoGallery'));
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
        $videoGallery                 = new VideoGallery;
        $videoGallery->title          = $request->title;
        $videoGallery->youtube_link   = $request->youtube_link;

        if($videoGallery->save()){
            return redirect()->route('videoGallery.index')->with('success', 'Video has been added successfully');
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
        $video_link = VideoGallery::findOrFail(decrypt($id));
        return view('admin.videoGallery.edit',compact('video_link'));
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
        $videoGallery = VideoGallery::findOrFail($id);
        
        $videoGallery->title           = $request->title;
        $videoGallery->youtube_link    = $request->youtube_link;
        
        if ($videoGallery->save()) {
            return redirect()->route('videoGallery.index')->with('success', 'Video has been updated successfully');
        } else {
            return back()->with('error', 'Failed to update the Video.');
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
        $videoGallery = VideoGallery::findOrFail($id);
        
        if (VideoGallery::destroy($id)) {
            return redirect()->route('videoGallery.index')->with('danger', 'Video has been deleted successfully');
        } else {
            return back();
        }
    }
}
