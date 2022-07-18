<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\produk;
use App\Models\test;
use Carbon\Carbon;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use DateTime;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // @dd();


        $transaksi = new Transaksi();

        $jumtransaksi = Transaksi::orderBy('id_transaksi','desc')->first();
        // @dd(is_null($jumtransaksi));
        if (is_null($jumtransaksi)) {
            $jumtransaksi = 0;
        } else{
            $jumtransaksi = intval(substr($jumtransaksi->id_transaksi,-5));
        }

        // @dd(substr($testing->id_transaksi,-5));

        $dt = Carbon::now();
        $dt = $dt->format('dmY');
        $dt = $dt. str_pad($jumtransaksi+1, 5, '0', STR_PAD_LEFT);

        // @dd($jumtransaksi);

        if (session()->get('id')) {

        } else {
            // @dd("jalan");
            $request->session()->put([
                'id' => $dt,
            ]);

            $transaksi->id_transaksi = $dt;
            $transaksi->total_item = 0;
            $transaksi->total_harga = 0;

            $transaksi->save();
            // @dd(session()->get('id'));
        }


        // @dd(session()->get('id'));
        $transaksinow = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();
        // @dd($transaksinow);
        $jumlah = test::first();
        $kategori = Kategori::all();
        // @dd($jumlah->angka);
        return view('menu', compact('kategori', 'jumlah', 'transaksinow'));
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

    }

    public function produk($id)
    {
        $transaksinow = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();

        $transaksidetail = TransaksiDetail::where('transaksi_id',session()->get('id'))->get();
        // @dd($transaksidetail);
        $produk = Produk::where('kategori_id', $id )->get();
        $kategori = Kategori::where('id_kategori', $id)->firstorfail();
        // @dd($transaksidetail->p);
        $data_kategori = Kategori::all();

        return view('menu-produk', compact('produk', 'kategori', 'data_kategori', 'transaksinow', 'transaksidetail'));
    }

    public function tambah(Request $request)
    {
        $transaksinow = Transaksi::where('id_transaksi',session()->get('id'))->firstorfail();
        $transaksidetail = new TransaksiDetail();
        $produk = Produk::where('nama_produk', $request->nama)->firstorfail();
        $transaksidetail->transaksi_id = $transaksinow->id_transaksi;
        $transaksidetail->produk_id = $produk->id_produk;
        $transaksidetail->harga_satuan = $produk->harga;
        $transaksidetail->jumlah = 1;
        $jumlah = DB::table('transaksi')->where('id_transaksi',session()->get('id'))->update(['total_item'=>$transaksinow->total_item + 1, 'total_harga' => $transaksinow->total_harga + $transaksidetail->harga_satuan]);
        $transaksidetail->save();
        return back();
        // @dd($request->all());
    }
}
