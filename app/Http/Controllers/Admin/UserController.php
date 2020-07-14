<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',['users' => $users]);
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
        //
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
        $user = User::findOrFail($request->id);
        $user->update($request->all());
        return redirect('/admin/user')->with('success','Data has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->id != 1){
            $users = User::findOrFail($request->id);
            $users->delete();
            return redirect()->route('admin.user.index')->with(['success' => 'Data has been delete']);
        }else{
            return redirect()->route('admin.user.index')->with(['error' => 'Data cannot delete with permission']);
        }
    }

    public function changepassword(Request $request)
    {
        $pass = User::select('password')->where('id', $request->id)->first()->password;

        if (Hash::check($request->old_password, $pass)) {
            User::where('id', $request->id)->update(array('password' => Hash::make($request->password)));
            return redirect('/admin/user')->with('success','Data has been update');
        } else {
            return redirect('/admin/user')->with('error','Data cannot update password');
        }
    }
}
