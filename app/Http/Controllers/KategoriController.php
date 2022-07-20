<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->folderFoto = public_path('upload\foto_kategori');
    }

    public function index()
    {
        $kategori = Kategori::paginate(5);

        $user = User::where('nip','=',Auth::user()->nip)->firstOrFail();
        return view('admin.kategori', compact('user', 'kategori'));
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
        $kategori = new Kategori();



        $kategori->nama_kategori = $request->nama;

        if($request->file('foto')){
            $file = $request->file('foto');
            $nowTimeStamp = now()->timestamp;
            $fileName = "{$nowTimeStamp}-{$file->getClientOriginalName()}";
            $file->move($this->folderFoto, $fileName);
            $kategori->foto_kategori = $fileName;
        }

        $kategori->save();
        return back()->with('success', 'Data Berhasil ditambah');
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
        // @dd($request->all());
        // @dd($id);
        $kategori = Kategori::findorfail($id);
        if($request->file('foto')){
            $file = $request->file('foto');
            $nowTimeStamp = now()->timestamp;
            $fileName = "{$nowTimeStamp}-{$file->getClientOriginalName()}";
            $file->move($this->folderFoto, $fileName);
            $kategori->foto_kategori = $fileName;
        }
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
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
        // @dd($id);
        $kategori = Kategori::where('id_kategori','=',$id)->firstOrFail();
        // @dd($kategori);
        $kategori->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
