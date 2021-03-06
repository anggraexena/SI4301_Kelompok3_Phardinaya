@extends('app')

@section('content')
<!-- Content -->
<section id="content" class="mb-4">
    <div class="container">
        <div class="title mb-3">
          <br>
          <h2>Tambah Transaksi</h2>
        </div>
    </div>
</section>
<!-- Akhir Konten -->
<section id="formulir">
    <div class="container">
        <div class="card-body">
            <div class="row">
            <div class="col-md-5 m-10">
                <div>
                    <img src="img/creditcard.png" class="img-fluid" alt="">
                </div>
                <!-- Membuat halaman -->
            </div>
            <div class="col-md-7">
                <div class="container">
                    <div class="card" style="background-color: #FAEBE0;">
                        <div class="card-body">
                        <form action="/post_transaksi" method="POST" >
                        @csrf
                        <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="name">Kode Obat</label>
                                <input type="text" class="form-control" name ="kodeobat" placeholder="Masukkan kode Obat"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="qty">Qty</label>
                                <input type="text" class="form-control" name ="qty" placeholder="Masukkan Qty"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="total">Bayar</label>
                                <input type="number" class="form-control" name ="bayar" placeholder="Masukkan Harga"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="metodebayar">Metode Pembayaran</label>
                                <input type="text" class="form-control" name ="metodebayar" placeholder="Masukkan metode pembayaran"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="diskon">Diskon</label>
                                <input type="text" class="form-control" name ="diskon" placeholder="Masukkan diskon"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-outline-danger mt-3 ps-5 pe-5">Batal</a>
                            <button type="submit" class="btn btn-custom mt-3 ps-5 pe-5" style="color:white">Simpan</a>
                        </div>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

@endsection