<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('index', compact('users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->select('id', 'role')->get();
        return view('create', compact('roles') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            "role_id"   => $request->input('role'),
            "name"      => $request->input('username'),
            "email"     => $request->input('email'),
            "password"  => $request->input('password'),
            "address"   => $request->input('address'),
            "phone"     => $request->input('phone')
        ];

        DB::table('users')->insert( $data );

        return redirect()->route('users.index')->with('status', 'Successfully insert user.');
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
        $roles = DB::table('roles')->select('id', 'role')->get();
        $users = DB::table('users')->find($id);
        return view('edit', compact('users', 'roles'));
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
        $data = [
            "role_id"   => $request->input('role'),
            "name"      => $request->input('username'),
            "email"     => $request->input('email'),
            "password"  => $request->input('password'),
            "address"   => $request->input('address'),
            "phone"     => $request->input('phone')
        ];

        DB::table('users')
            ->where('id', $id)
            ->update($data);
        return redirect()->route('users.index')->with('status', 'Successfully update user.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users.index')->with('status', 'Successfully delete user.');
    }
}
