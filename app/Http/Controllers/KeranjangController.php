<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksinow = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();
        $transaksidetail = TransaksiDetail::where('transaksi_id',session()->get('id'))->get();
        // @dd($transaksidetail->jumlah);
        $kategori = Kategori::all();
        return view('keranjang', compact('kategori', 'transaksinow','transaksidetail'));

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

        $info = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();
        $transaksidetail = TransaksiDetail::where([['produk_id', $id], ['transaksi_id', session()->get('id')],])->first();

        $harga = $transaksidetail->produk->harga * $transaksidetail->jumlah;
        $transaksinow = Transaksi::where('id_transaksi',session()->get('id'))->update(array('total_harga' => $info->total_harga - $harga, 'total_item' => $info->total_item - $transaksidetail->jumlah));
        $transaksidetail->delete();
        return back();
    }

    public function tambah(Request $request, $id)
    {
        // @dd($id);
        $infotransaksi = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();
        $info = TransaksiDetail::where([['produk_id', $id], ['transaksi_id', session()->get('id')],])->first();
        $jumlah = $info->jumlah + 1;
        $jumlahtransaksi = $infotransaksi->total_item + 1;
        // @dd($info->produk->harga);
        $totalharga = $infotransaksi->total_harga + $info->produk->harga;
        $transaksidetail = TransaksiDetail::where([['produk_id', $id], ['transaksi_id', session()->get('id')],])->update(['jumlah' => $jumlah]);
        $transaksi = Transaksi::where('id_transaksi',session()->get('id'))->update(array('total_item' => $jumlahtransaksi, 'total_harga' => $totalharga));

        return back();
    }

    public function kurang(Request $request,$id)
    {
        $infotransaksi = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();
        $info = TransaksiDetail::where([['produk_id', $id], ['transaksi_id', session()->get('id')],])->first();
        $jumlah = $info->jumlah - 1;
        $jumlahtransaksi = $infotransaksi->total_item - 1;
        // @dd($info->produk->harga);
        $totalharga = $infotransaksi->total_harga - $info->produk->harga;
        $transaksidetail = TransaksiDetail::where([['produk_id', $id], ['transaksi_id', session()->get('id')],])->update(['jumlah' => $jumlah]);
        $transaksi = Transaksi::where('id_transaksi',session()->get('id'))->update(array('total_item' => $jumlahtransaksi, 'total_harga' => $totalharga));

        return back();
    }

    public function receipt(Request $request)
    {
        $date = Carbon::now();
        $pesanan = TransaksiDetail::where('transaksi_id',session()->get('id'))->get();
        // @dd($pesanan);
        $transaksinow = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();
        return view('receipt', compact('transaksinow', 'date', 'pesanan'));
    }
}
