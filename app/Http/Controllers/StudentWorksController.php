<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentWork;


class StudentWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $studentWorks = StudentWork::all();
        return view('student_works.index')->with('student_works', $studentWorks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student_works.create')->with('success','Item Created successfully!');

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
        $studentWorks = new StudentWork;
        $studentWorks->title = $request->input('title');
        $studentWorks->description = $request->input('description');
        $studentWorks->save();
        
        // dd($student_classes);
        return redirect('/student_works')->with('success','Item Store successfully!');
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
        $studentWorks = StudentWork::all();
        // dd($studentClasses);
        return view('student_works.show')->with('student_works', $studentWorks);
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
        $studentWork = StudentWork::find($id);
        return view('student_works.edit')->with('student_work', $studentWork);
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
        $studentWorks = StudentWork::find($id);
        $studentWorks->title = $request->input('title');
        $studentWorks->description = $request->input('description');
        $studentWorks->save();
        return redirect('/student_works')->with('success','Item Updated successfully!');
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
        $studentWorks = StudentWork::find($id);
        $studentWorks->delete();
        return redirect('/student_works')->with('success','Item Deleted successfully!');
    }
}