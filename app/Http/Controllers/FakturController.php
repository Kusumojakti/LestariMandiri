<?php

namespace App\Http\Controllers;

use App\Models\Faktur;
use App\Http\Requests\StoreFakturRequest;
use App\Http\Requests\UpdateFakturRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FakturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faktur = Faktur::with('pelanggan', 'user')->get();
        return view('laporan', ['data' => $faktur]);
    }

    public function getAllFaktur()
    {
        $faktur = Faktur::all();
        return response()->json($faktur);
    }

    public function shippedStatus()
    {
        $user = Auth::user();
        $faktur = null;
        if ($user->role == 'driver') {
            $id_driver = $user->id;
            $faktur = Faktur::with('user', 'pelanggan')
                ->whereHas('user', function ($query) use ($id_driver) {
                    $query->where('users.id', $id_driver);
                })
                ->get();
        } else {
            $faktur = Faktur::with('user', 'pelanggan')
                ->whereHas('user', function ($query) use ($user) {
                    $query->where('role', 'driver');
                })
                ->get();
        }

        return view('status_pengiriman', ['faktur' => $faktur]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Faktur $faktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faktur = Faktur::with('user', 'pelanggan')
            ->where('fakturs.id', $id)
            ->first();

        return response()->json($faktur);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'shipping_status' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $faktur = Faktur::find($id);

        $faktur->update([
            'shipping_status' => $request->shipping_status,
            'shipping_date' => Carbon::now()
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faktur $faktur)
    {
        //
    }
}
