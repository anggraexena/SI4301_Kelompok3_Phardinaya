@extends('app')

@section('content')
<!-- Content -->
<section id="content">
    <div class="container">
        <div class="greetings">
          <br>
          <h2>Detail Obat</h2>
        </div>
    </div>
</section>
<!-- Akhir Konten -->
      <!-- Membuat bagian form -->
      
    <section id="formulir">
      <div class="container">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 m-10">
                <div>
                  <img src="img/obat-panadol.png" class="img-fluid" alt="">
                </div>
              </div>

              <div class="col-md-7">
                <!-- Membuat link ke halaman Booking dengan method GET -->
                  <div class="row">
                    <div class="col">
                      <span><strong>Kode Obat </strong> : {{ $o -> kode_obat }}</span>
                    </div>
                    <div class="col">
                      <span><strong>No Batch</strong> : B10/121/1</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <span><strong>Nama Obat</strong> : {{ $o -> nama_obat }}</span>
                    <span class="mt-3"><strong>Deskripsi</strong> : {{ $o -> deskripsi_obat }}</span>
                    <span class="mt-3"><strong>Kategori</strong>: {{ $o -> kategori }}</span>
                    <span class="mt-3"><strong>Stok</strong> : {{ $o -> stok }}</span>
                    <span class="mt-3"><strong>Berat</strong> : {{ $o -> berat_satuan }}</span>
                    <span class="mt-3"><strong>Tanggal Kadaluarsa</strong> : {{ $o -> tgl_expired }}</span>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <span><strong>Harga Jual</strong> : Rp {{ $o -> harga_jual }}</span>
                    </div>
                    <div class="col">
                      <span><strong>Harga Beli</strong> : Rp {{ $o -> harga_beli}}</span>
                    </div>
                  </div>
                  <a href="/edit_page_obat/{{$o -> kode_obat}}" class="btn btn-custom mt-3 ps-5 pe-5" style="color:white">Edit</a>
                  <a href="/hapus_obat/{{$o -> kode_obat}}" class="btn btn-danger mt-3 ps-5 pe-5" style="color:white">Hapus</a>
                  
              </div>
            </div>
          </div>
      </div>
    </section>
 

@endsection
