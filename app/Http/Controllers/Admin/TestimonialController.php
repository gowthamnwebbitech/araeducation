<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Redirect;
use Validator;

class TestimonialController extends Controller
{
    
    public function index(Request $request)
    {
        $testimonials    = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
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
        $testimonial                 = new Testimonial;
        $testimonial->youtube_url    = $request->youtube_url;
        $testimonial->status         = $request->status;

        if($testimonial->save()){
            return redirect()->route('testimonial.index')->with('success', 'Testimonial has been added successfully');
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
        $testimonial = Testimonial::findOrFail(decrypt($id));
        return view('admin.testimonials.edit',compact('testimonial'));
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
        $testimonial = Testimonial::findOrFail($id);
        
        $testimonial->youtube_url     = $request->youtube_url;
        $testimonial->status          = $request->status;
        
        if ($testimonial->save()) {
            return redirect()->route('testimonial.index')->with('success', 'Testimonial has been updated successfully');
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
        $testimonial = Testimonial::findOrFail($id);
        
        if (Testimonial::destroy($id)) {
            return redirect()->route('testimonial.index')->with('danger', 'Testimonial has been deleted successfully');
        } else {
            return back();
        }
    }
}
