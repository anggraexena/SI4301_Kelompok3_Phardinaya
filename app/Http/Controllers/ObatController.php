<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index(){
        $o = Obat::all();
        return view('catalog', compact('o'));
    }

    public function post_obat(Request $request)
    {
        $o = new Obat();
        $o->kode_obat = $request->kodeobat;
        $o->nama_obat = $request->namaobat;
        $o->no_batch = $request->nobatch;
        $o->deskripsi_obat = $request->deskripsi;
        $o->kategori = $request->kategori;
        $o->tgl_expired = $request->kedaluarsa;
        $o->stok = $request->stok;
        $o->berat_satuan = $request->berat;
        $o->satuan = $request->satuan;
        $o->harga_beli = $request->hargabeli;
        $o->harga_jual = $request->hargajual;
        
        $o->save();

        return redirect('/catalog');
    }

    public function edit_obat(Request $request, $index)
    {
        $o = Obat::find($index);
        $o->kode_obat = $request->kodeobat;
        $o->nama_obat = $request->namaobat;
        $o->no_batch = $request->nobatch;
        $o->deskripsi_obat = $request->deskripsi;
        $o->kategori = $request->kategori;
        $o->tgl_expired = $request->kedaluarsa;
        $o->stok = $request->stok;
        $o->berat_satuan = $request->berat;
        $o->satuan = $request->satuan;
        $o->harga_beli = $request->hargabeli;
        $o->harga_jual = $request->hargajual;
        
        $o->save();

        return redirect('/catalog');
    }

    public function detail_obat($index)
    {
        $o = Obat::find($index);
        return view('detailobat', compact('o'));
    }
    public function edit_page_obat($index)
    {
        $o = Obat::find($index);
        return view('editobat', compact('o'));
    }

    public function hapus_obat($index)
    {
        $o = Obat::find($index);
        $o->delete();
        return redirect('/catalog');
    }
}
