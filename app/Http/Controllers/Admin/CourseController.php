<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Redirect;
use Validator;

class courseController extends Controller
{
    
    public function index(Request $request)
    {
        $course    = Course::latest();
        $course = $course->get();
        return view('admin.course.index', compact('course'));
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
        $course                 = new Course;
        $course->name          = $request->name;
        $course->status         = $request->status;

        if($course->save()){
            return redirect()->route('course.index')->with('success', 'Course has been added successfully');
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
        $course = Course::findOrFail(decrypt($id));
        return view('admin.course.edit',compact('course'));
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
        $course = Course::findOrFail($id);
        
        $course->name           = $request->name;
        $course->status          = $request->status;
        
        if ($course->save()) {
            return redirect()->route('course.index')->with('success', 'Course has been updated successfully');
        } else {
            return back()->with('error', 'Failed to update the Course.');
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
        $course = Course::findOrFail($id);
        
        if (Course::destroy($id)) {
            return redirect()->route('course.index')->with('danger', 'Course has been deleted successfully');
        } else {
            return back();
        }
    }
}
