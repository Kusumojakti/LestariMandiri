<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Faktur;
use App\Models\Order;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::with('barang', 'faktur')->get();
        return view('orderan', ['order' => $order]);
    }

    public function addOrder()
    {
        $pelanggan = Pelanggan::all();
        $driver = User::where('role', 'driver')->get();
        return view('tambahorder', ['pelanggan' => $pelanggan, 'driver' => $driver]);
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
            'tableData.*.kodeBrg' => 'required|exists:barangs,kodeBrg',
            'tableData.*.quantity' => 'required',
            'keterangan' => 'required',
            'tableData.*.user_id' => 'required',
            'pelanggan_id' => 'required',
            'driver' => 'required'

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }


        // dataOrder 
        $dataOrder = json_decode($request->input('tableData'), true);
        if ($dataOrder != []) {
            $totalPembelian = 0;

            // create faktur
            $faktur = 'f' . Carbon::now()->format('dmy') . Str::random(3);

            $cekFaktur = Faktur::find($faktur);
            if ($cekFaktur != null) {
                $faktur = 'f' . Carbon::now()->format('dmy') . Str::random(3);
            }

            // ekstrak data order
            foreach ($dataOrder as &$item) {
                $item['total'] = $item['harga'] * $item['quantity'];
                unset($item['harga']);
                $totalPembelian += $item['total'];
            }

            $newFaktur = Faktur::create([
                'id' => $faktur,
                'tanggal' => Carbon::now(),
                'total_pembelian' => $totalPembelian,
                'pelanggan_id' => $request->pelanggan_id,
                'user_id' => $request->driver,
                'keterangan' => $request->keterangan
            ]);

            if ($newFaktur) {
                // masukan faktur_id ke tiap baris data order
                foreach ($dataOrder as &$item) {
                    $item['faktur_id'] = $faktur;
                }

                $newOrder = Order::insert($dataOrder);
                if ($newOrder) {
                    foreach ($dataOrder as &$item) {
                        $brg = Barang::where('kodeBrg', $item['kodeBrg'])->first();
                        $brg->update([
                            'stock' => $brg->stock - $item['quantity']
                        ]);
                    }
                    return redirect('/order')->with('success', 'Data inserted successfully');
                }
            }
        }

        return redirect()->back()->withErrors(['data-order' => 'Data Order Tidak Boleh Kosong']);
    }

    public function searchorders(Request $request)
    {
        $search = $request->input('search');
        $data = Order::where('faktur_id', 'like', "%{$search}%")
            ->orWhere('kodeBrg', 'like', "%{$search}%")
            ->get();

        return view('orderan', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
