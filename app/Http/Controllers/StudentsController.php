<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Studentt;
use App\Countary;
use App\State;
use App\StudentClass;




class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        //
        // dd('mhvh');
        $students = Studentt::all();
        // $students = Studentt::with(['StudentClass'])->get();

        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // dd('create');
        $studentClasses = StudentClass::all();
        $states = State::all();
        $countries = Countary::all();
        return view('students.create')
        ->with('states', $states)
        ->with('countries', $countries)
        ->with('student_classes', $studentClasses)
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
        // dd($request->all());
        $students = new Studentt;
        $students->first_name = $request->input('first_name');
        $students->last_name = $request->input('last_name');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->father_name = $request->input('father_name');
        $students->mother_name = $request->input('mother_name');
        $students->aadhar_id = $request->input('aadhar_id');
        $students->age = $request->input('age');
        $students->dob = $request->input('dob');
        $students->doa = $request->input('doa');
        $students->image = $request->file('image')->store('Student','public');
        $students->gender = $request->input('gender');
        $students->address = $request->input('address');
        $students->city = $request->input('city');
        $students->state_id = $request->input('state_id');
        $students->countary_id = $request->input('countary_id');
        $students->student_class_id = $request->input('student_class_id');
        // dd($students);
        $students->save();
        
        // dd($students);
        return redirect('/students')->with('success','Item Store successfully!');
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
        $students = Studentt::all();
        return view('students.show')->with('students', $students);
    }
    // public function show($id)
    // {
    //     //
    //     // dd($student_id);
    //     // dd('nk');
    //     $student = Studentt::find($id);
    //     return view('students.show')->with('student', $student);
    // }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Studentt::find($id);
        $states = State::all();
        $countries = Countary::all();
        // dd($menu);
        return view('students.edit')
        ->with('states', $states)
        ->with('countries', $countries)
        ->with('student', $student);
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
        // dd($request->all());
        $students = Studentt::find($id);
        $students->first_name = $request->input('first_name');
        $students->last_name = $request->input('last_name');
        $students->email = $request->input('email');
        // $students->password = $request->input('password');
        $students->father_name = $request->input('father_name');
        $students->mother_name = $request->input('mother_name');
        $students->aadhar_id = $request->input('aadhar_id');
        $students->age = $request->input('age');
        $students->dob = $request->input('dob');
        $students->doa = $request->input('doa');
        $students->image = $request->file('image')->store('Student','public');
        $students->gender = $request->input('gender');
        $students->address = $request->input('address');
        $students->city = $request->input('city');
        $students->state_id = $request->input('state_id');
        $students->countary_id = $request->input('countary_id'); 
        $students->student_class_id = $request->input('student_class_id');
        // dd($students);
        $students->save();
        // dd($teachers);
        return redirect('/students')->with('success','Item Updated successfully!');
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
        $students = Studentt::find($id);
        $students->delete();
        return redirect('/students')->with('success','Item Deleted successfully!');
    }
}
