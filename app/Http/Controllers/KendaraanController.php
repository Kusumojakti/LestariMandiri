<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::with('driver')->get();
        return view('kendaraan', ['data' => $kendaraan]);
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
            'noPol' => 'required|unique:kendaraans',
            'jenis_kendaraan' => 'required',
            'BBM' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $kendaraan = Kendaraan::create([
            'noPol' => $request->noPol,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'BBM' => $request->BBM,
            'user_id' => $request->user_id
        ]);

        if ($kendaraan) {
            return redirect('/kendaraan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kendaraan = Kendaraan::where('noPol', $id)->first();
        return response()->json($kendaraan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kendaraan' => 'required',
            'BBM' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $kendaraan = Kendaraan::where('noPol', $id)->first();
        $kendaraan->update([
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'BBM' => $request->BBM,
            'user_id' => $request->user_id
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kendaraan = Kendaraan::where('noPol', $id);
        $kendaraan->delete();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $data = Kendaraan::where('noPol', 'like', "%{$search}%")
                ->get();

        return view('/kendaraan', compact('order'));
    }
}
