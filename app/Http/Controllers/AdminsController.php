<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Adminn;



class AdminsController extends Controller
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
        $admins = Adminn::all();
        // dd($admins);
        return view('admins.index')->with('admins', $admins);
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
        return view('admins.create')->with('success','Item Created successfully!');

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
        $admins = new Adminn;
        $admins->first_name = $request->input('first_name');
        $admins->last_name = $request->input('last_name');
        $admins->email = $request->input('email');
        $admins->password = $request->input('password');
        $admins->image = $request->file('image')->store('Admin','public');
        // dd($admins);
        $admins->save();
        
        // dd($admins);
        return redirect('/admins')->with('success','Item Store successfully!');
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
        $admin = Adminn::find($id);
        // dd($menu);
        return view('admins.edit')->with('admin', $admin);
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
        $admins = Adminn::find($id);
        $admins->first_name = $request->input('first_name');
        $admins->last_name = $request->input('last_name');
        $admins->email = $request->input('email');
        $admins->image = $request->file('image')->store('Admin','public');
        $admins->save();
        // dd($admins);
        return redirect('/admins')->with('success','Item Updated successfully!');
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
        $admins = Adminn::find($id);
        $admins->delete();
        return redirect('/admins')->with('success','Item Deleted successfully!');
    }
}
