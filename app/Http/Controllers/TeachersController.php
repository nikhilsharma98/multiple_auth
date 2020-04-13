<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacherr;


class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        // dd('mhvh');
        $teachers = Teacherr::all();
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teachers.create')->with('success','Item Created successfully!');
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
        // dd($request->all());
        $teachers = new Teacherr;
        $teachers->first_name = $request->input('first_name');
        $teachers->last_name = $request->input('last_name');
        $teachers->email = $request->input('email');
        $teachers->password = $request->input('password');
        $teachers->address = $request->input('address');
        $teachers->age = $request->input('age');
        $teachers->experience = $request->input('experience');
        $teachers->aadhar_id = $request->input('aadhar_id');
        $teachers->dob = $request->input('dob');
        $teachers->gender = $request->input('gender');
        // dd($teachers);
        $teachers->save();
        
        // dd($teachers);
        return redirect('/teachers')->with('success','Item Store successfully!');
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
        //
        $teacher = Teacherr::find($id);
        // dd($menu);
        return view('teachers.edit')->with('teacher', $teacher);
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
        $teachers = Teacherr::find($id);
        $teachers->first_name = $request->input('first_name');
        $teachers->last_name = $request->input('last_name');
        $teachers->email = $request->input('email');
        $teachers->password = $request->input('password');
        $teachers->address = $request->input('address');
        $teachers->age = $request->input('age');
        $teachers->experience = $request->input('experience');
        $teachers->aadhar_id = $request->input('aadhar_id');
        $teachers->dob = $request->input('dob');
        $teachers->gender = $request->input('gender');
        $teachers->save();
        // dd($teachers);
        return redirect('/teachers')->with('success','Item Updated successfully!');
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
        $teachers = Teacherr::find($id);
        $teachers->delete();
        return redirect('/teachers')->with('success','Item Deleted successfully!');
    }
}