<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PegawaiController extends Controller
{
    public function edit_pegawai(Request $request, $index)
    {
        $o = User::find($index);
        $o->nama_pegawai = $request->namapegawai;
        $o->email = $request->email;
        $o->nohp_pegawai = $request->nohp_pegawai;
        $o->alamat_pegawai = $request->alamat;
        $o->tgllahir_pegawai = $request->tgllahir_pegawai;
        
        $o->save();

        return redirect('/detailpegawai');
    }

}
