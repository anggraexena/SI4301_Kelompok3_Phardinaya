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
                    <!-- <thead style="background-color:#F2F2F2">
                        <tr style="border:1px solid #B9B9B9;">
                            <th scope="col">id transaksi</th>
                            <th scope="col">kode obat</th>
                            <th scope="col">qty</th>
                            <th scope="col">tanggal transaksi</th>
                            <th scope="col">metode pembayaran</th>
                            <th scope="col">jenis transaksi</th>
                            <th scope="col">sub total</th>
                            <th scope="col">diskon</th>
                            <th scope="col">total bayar</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <tr style="background-color:#F2F2F2">
                            <th scope="col">id transaksi</th>
                            <th scope="col">kode obat</th>
                            <th scope="col">qty</th>
                            <th scope="col">tanggal transaksi</th>
                            <th scope="col">metode pembayaran</th>
                            <th scope="col">jenis transaksi</th>
                            <th scope="col">sub total</th>
                            <th scope="col">diskon</th>
                            <th scope="col">total bayar</th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td>PCT</td>
                            <td>10</td>
                            <td>6/1/22</td>
                            <td>Cash</td>
                            <td>Jual</td>
                            <td>Rp 25.000</td>
                            <td>10%</td>
                            <td>Rp 250.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection