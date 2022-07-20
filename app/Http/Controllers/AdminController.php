<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Transaksi;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // @dd("jalan");
        $data_user = User::count();
        $kategori = Kategori::count();
        $produk = Produk::count();
        $total_pendapatan = Transaksi::where('status','selesai')->sum('total_harga');
        $data_pendapatan = array();
        for ($i=1; $i <= 12; $i++) {
            $total_pembelian = Transaksi::where('status','selesai')->whereMonth('created_at', $i)->sum('total_harga');

        $data_pendapatan[] += $total_pembelian;
        }

        $date = Carbon::now();

        // @dd(json_encode($data_pendapatan));


        $transaksi = Transaksi::where('status','selesai')->count();
        $user = User::where('nip','=',Auth::user()->nip)->firstOrFail();
        return view('admin.dashboard', compact('user', 'kategori', 'produk', 'data_user', 'transaksi', 'data_pendapatan','date', 'total_pendapatan'));
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
        //
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
    }
}
