<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentClass;
use App\Teacherr;

class StudentClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('mhvh');
        $studentClasses = StudentClass::all();
        return view('student_classes.index')->with('student_classes', $studentClasses);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $teachers = Teacherr::all();
        return view('student_classes.create')
        ->with('teachers', $teachers)
        ->with('success','Item Created successfully!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $studentClasses = new StudentClass;
        $studentClasses->class = $request->input('class');
        $studentClasses->section = $request->input('section');
        $studentClasses->save();
        
        // dd($student_classes);
        return redirect('/student_classes')->with('success','Item Store successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('show);
        $studentClasses = StudentClass::all();
        // dd($studentClasses);
        return view('student_classes.show')->with('student_classes', $studentClasses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $studentClass = StudentClass::find($id);
        // dd($menu);
        return view('student_classes.edit')->with('student_class', $studentClass);
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
        //
        $studentClasses = StudentClass::find($id);
        $studentClasses->class = $request->input('class');
        $studentClasses->section = $request->input('section');
        $studentClasses->save();
        // dd($studentClasses);
        return redirect('/student_classes')->with('success','Item Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $studentClasses = Teacherr::find($id);
        $studentClasses->delete();
        return redirect('/student_classes')->with('success','Item Deleted successfully!');
    }
}
