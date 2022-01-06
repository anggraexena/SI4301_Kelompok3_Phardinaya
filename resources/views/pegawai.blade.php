@extends('app')

@section('content')
<!-- Content -->
<section id="content" class="mb-4">
    <div class="container">
        <div class="title mb-3">
          <br>
          <h2>Daftar Pegawai</h2>
          <a href="/tambahtransaksi" class="btn btn-custom mt-3" style="color:white">Tambah Pegawai</a>
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
                            <th scope="col">id pegawai</th>
                            <th scope="col">Nama pegawai</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. HP</th>
                            <th scope="col">Tanggal lahir</th>
                            <th scope="col">Lama bekerja</th>
                            <th scope="col">Jenis kelamin</th>
                            <th scope="col"></th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>edit/delete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection