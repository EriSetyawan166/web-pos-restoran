<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->folderFoto = public_path('upload\foto_produk');
    }

    public function index()
    {
        $kategori = Kategori::all();
        $produk = Produk::paginate(5);
        $user = User::where('nip','=',Auth::user()->nip)->firstOrFail();
        return view('admin.produk', compact('user', 'produk', 'kategori'));
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
        // @dd($request->all());
        $jumlah = Produk::count();
        $produk = new Produk();
        $produk->kategori_id = $request->kategori;
        $produk->kode_produk= "PR".str_pad($jumlah+1, 5, '0', STR_PAD_LEFT);
        $produk->nama_produk = $request->nama;
        $produk->harga = $request->harga;
        $produk->status= $request->status;

        if($request->file('foto')){
            $file = $request->file('foto');
            $nowTimeStamp = now()->timestamp;
            $fileName = "{$nowTimeStamp}-{$file->getClientOriginalName()}";
            $file->move($this->folderFoto, $fileName);
            $produk->foto_produk = $fileName;
        }


        $produk->save();

        return redirect()->route('produk.index') -> with('success', 'Data berhasil ditambah');
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
        $produk = Produk::findorfail($id);
        if($request->file('foto')){
            $file = $request->file('foto');
            $nowTimeStamp = now()->timestamp;
            $fileName = "{$nowTimeStamp}-{$file->getClientOriginalName()}";
            $file->move($this->folderFoto, $fileName);
            $produk->foto_produk = $fileName;
        }
        $produk->kategori_id = $request->kategori;

        $produk->nama_produk = $request->nama;
        $produk->harga = $request->harga;
        $produk->status = $request->status;

        $produk->save();
        return back()->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::where('id_produk','=',$id)->firstOrFail();
        // @dd($kategori);
        $produk->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }


}
