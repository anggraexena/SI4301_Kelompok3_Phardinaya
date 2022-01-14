<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{

    public function index(){
        $transaksi = Transaksi::all();
        return view('transaksi', compact('transaksi'));
    }
    public function post_transaksi(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->kode_obat = $request->kodeobat;
        $transaksi->id_pegawai = Auth::user()->id;
        $transaksi->qty = $request->qty;
        date_default_timezone_set("Asia/Jakarta");
        $transaksi->tgl_transaksi = date("Y-m-d H:i:s");
        // $transaksi->sub_total = $request->subtotal;
        // $transaksi->total = $request->total;
        $transaksi->metode_pembayaran = $request->metodebayar;
        
        $transaksi->diskon = $request->diskon;
        $transaksi->total_bayar = $request->bayar;
        
        // $imageName = ($request->image)->getClientOriginalName();
        // $transaksi->image_ktp = $imageName;
        // $request->image->move(public_path('img/ktp'), $imageName);

        $transaksi->save();

        return redirect('/transaksi');
    }
}
