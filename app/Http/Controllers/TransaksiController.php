<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function post_transaksi(Request $request)
    {
        $o = new Transaksi();
        $o->kode_obat = $request->kodeobat;
        $o->id_pegawai = Auth::user()->id;
        $o->qty = $request->qty;
        date_default_timezone_set("Asia/Jakarta");
        $o->tgl_transaksi = date("Y-m-d H:i:s");
        // $o->sub_total = $request->subtotal;
        // $o->total = $request->total;
        $o->metode_pembayaran = $request->metodebayar;
        $o->diskon = $request->diskon;
        $o->total_bayar = $request->bayar;
        
        // $imageName = ($request->image)->getClientOriginalName();
        // $o->image_ktp = $imageName;
        // $request->image->move(public_path('img/ktp'), $imageName);

        $o->save();

        return redirect('/transaksi');
    }
}
