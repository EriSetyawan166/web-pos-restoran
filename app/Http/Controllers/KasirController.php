<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::where('id_kasir',Auth::user()->nip)->count();
        $pendapatan = Transaksi::where([['status', 'selesai'], ['id_kasir', Auth::user()->nip],])->sum('total_harga');
        // @dd($pendapatan);
        $user = User::where('nip','=',Auth::user()->nip)->firstOrFail();
        return view('kasir.dashboard', compact('user', 'transaksi', 'pendapatan'));
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

    public function acc(Request $request)
    {
        // @dd($request->id);
        $kasir = User::where('nip','=',Auth::user()->nip)->firstOrFail();
        // $transaksi = Transaksi::where('id_transaksi', $request->id)->firstorfail();
        $transaksi= DB::table('transaksi')->where('id_transaksi', $request->id)->update(['status'=>'selesai', 'id_kasir' => $kasir->nip]);
        // @dd($transaksi);
        // $transaksi->status = "selesai";
        // $transaksi->id_kasir = $kasir->nip;
        // $transaksi->save();
        // @dd(session()->all());
        // @dd(session()->get('id'));

        return back()->with('success', 'transaksi berhasil');
    }
}
