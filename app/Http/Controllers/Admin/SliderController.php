<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Redirect;
use Validator;

class SliderController extends Controller
{
    
    public function index(Request $request)
    {
        $slider    = Slider::latest();
        $slider = $slider->get();
        return view('admin.slider.index', compact('slider'));
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
        $slider                 = new Slider;
        $slider->title          = $request->title;
        $slider->status         = $request->status;

        if($slider->save()){
            return redirect()->route('slider.index')->with('success', 'Slider has been added successfully');
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
        $slider = Slider::findOrFail(decrypt($id));
        return view('admin.slider.edit',compact('slider'));
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
        $slider = Slider::findOrFail($id);
        
        $slider->title           = $request->title;
        $slider->status          = $request->status;
        
        if ($slider->save()) {
            return redirect()->route('slider.index')->with('success', 'Slider has been updated successfully');
        } else {
            return back()->with('error', 'Failed to update the Slider.');
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
        $slider = Slider::findOrFail($id);
        
        if (Slider::destroy($id)) {
            return redirect()->route('slider.index')->with('danger', 'Slider has been deleted successfully');
        } else {
            return back();
        }
    }
}
