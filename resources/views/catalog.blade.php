@extends('app')

@section('content')
<!-- Content -->
<section id="content" class="mb-4">
    <div class="container">
        <div class="title mb-3">
          <br>
          <h2>Katalog Obat</h2>
        </div>
       <div class="row">
         <div class=" d-flex justify-content-between">
            <a href="/tambahobat" class="btn btn-custom mb-3 text-white">Tambah Obat</a>
            <form class="d-flex mb-3">
              <input class="form-control me-2" type="search" placeholder="Cari Obat..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
         </div>
       </div>

       
        <div class="row">
          @foreach($o as $obat)
          <div class="col mb-3 md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img/obat-panadol.png" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title"><strong>{{ $obat -> nama_obat }}</strong></h5>
                  <div class="isi">
                    <p class="harga">{{ $obat -> harga_beli }}</p>
                    <p class="kategori">{{ $obat -> deskripsi_obat }}</p>
                    <p class="kadaluarsa text-muted">{{ $obat -> tgl_expired}}</p>
                  </div>
                  <a style="text-decoration:none" href="/detailobat/{{$obat -> kode_obat}}" class="text-success "><strong>Lihat Detail</strong></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</section>
<!-- Akhir Konten -->

@endsection