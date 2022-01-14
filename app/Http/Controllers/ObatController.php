<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
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
        
        // $imageName = ($request->image)->getClientOriginalName();
        // $o->image_ktp = $imageName;
        // $request->image->move(public_path('img/ktp'), $imageName);

        $o->save();

        return redirect('/catalog');
    }
}
