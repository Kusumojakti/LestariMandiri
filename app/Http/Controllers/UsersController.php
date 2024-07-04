<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('karyawan', ['data' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'username' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'noTelp' => 'required|max:15',
            'alamat' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'noTelp' => $request->noTelp,
            'alamat' => $request->alamat
        ]);

        if ($user) {
            return redirect('/karyawan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'role' => 'required',
            'noTelp' => 'required|max:15',
            'alamat' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $user = User::find($id);

        $user->update([
            'nama' => $request->nama,
            'role' => $request->role,
            'noTelp' => $request->noTelp,
            'alamat' => $request->alamat
        ]);
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
