@extends('app')

@section('content')
<!-- Content -->
<section id="content" class="mb-4">
    <div class="container">
        <div class="title mb-3">
          <br>
          <h2>Daftar Transaksi</h2>
          <a href="/tambahtransaksi" class="btn btn-custom mt-3" style="color:white">Tambah Transaksi masuk</a>
            <form class="d-flex mt-3" style="float:right;">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered" style="border:1px solid #B9B9B9;">
                    <tbody>
                        <tr style="background-color:#F2F2F2">
                            <th scope="col">id transaksi</th>
                            <th scope="col">kode obat</th>
                            <th scope="col">qty</th>
                            <th scope="col">tanggal transaksi</th>
                            <th scope="col">metode pembayaran</th>
                            <th scope="col">diskon</th>
                            <th scope="col">total bayar</th>
                        </tr>
                        <tr>
                            @foreach($transaksi as $t)
                            <th>{{ $t->id_transaksi }}</th>
                            <td>{{ $t->kode_obat }}</td>
                            <td>{{ $t->qty }}</td>
                            <td>{{ $t->tgl_transaksi }}</td>
                            <td>{{ $t->metode_pembayaran }}</td>
                            <td>Rp {{ $t->diskon}}</td>
                            <td>Rp {{ $t->total_bayar }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection