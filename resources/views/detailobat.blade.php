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
                <!-- Membuat halaman -->
              <?php
              // Membuat pilihan untuk gambar yang redirect ke dalam button Book Now
                  // error_reporting(0);
                  // $pilihGedung = $_GET['pilihGedung'];
                  // if ($pilihGedung == 'cozy-hall') {
                  // echo '<img src = "./img/CozyHall.jpg" class="card-img-top" style="padding-right:50px">';
                  // } elseif ($pilihGedung == 'meeting-hall') {
                  // echo '<img src = "./img/MeetingHall.jpg" class="card-img-top" style="padding-right:50px">';
                  // } else {
                  // echo '<img src = "./img/minimalistHall.jpg" class="card-img-top" style="padding-right:50px">';
                  // }
              ?>
              </div>

              <div class="col-md-7">
                <!-- Membuat link ke halaman Booking dengan method GET -->
                  <div class="row">
                    <div class="col">
                      <span><strong>Kode Obat </strong> : PCT</span>
                    </div>
                    <div class="col">
                      <span><strong>No Batch</strong> : B10/121/1</span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <span><strong>Nama Obat</strong> : Paracetamol</span>
                    <span class="mt-3"><strong>Deskripsi</strong> : Obat pracetamol adalah obat untuk  meredakan rasa sakit </span>
                    <span class="mt-3"><strong>Kategori</strong>: Obat Bebas</span>
                    <span class="mt-3"><strong>Stok</strong> : 100 pcs</span>
                    <span class="mt-3"><strong>Berat</strong> : 100 mg</span>
                    <span class="mt-3"><strong>Tanggal Kadaluarsa</strong> : 12 12 2024</span>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <span><strong>Harga Jual</strong> : Rp 10.000</span>
                    </div>
                    <div class="col">
                      <span><strong>Harga Beli</strong> : Rp 5000</span>
                    </div>
                  </div>
                  <a href="/editobat" class="btn btn-custom mt-3 ps-5 pe-5" style="color:white">Edit</a>
                  
              </div>
            </div>
          </div>
      </div>
    </section>

@endsection
