@extends('app')

@section('content')
<!-- Content -->
<section id="content">
    <div class="container">
        <div class="greetings">
          <br>
          <h2>Profil</h2>
        </div>
    </div>
</section>
<!-- Akhir Konten -->
      <!-- Membuat bagian form -->
    <section id="formulir" style="margin-bottom:50px;">
      <div class="container">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5">
                <div>
                  <img src="https://icon-library.com/images/user-icon-flat/user-icon-flat-6.jpg" class="img-fluid ms-5 mt-5" alt="">
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
                  <div class="row mt-3">
                    <span class="mt-3"><strong>Nama </strong><br>{{ Auth::user()->nama_pegawai }}</span>
                    <span class="mt-3"><strong>Email </strong><br>{{ Auth::user()->email }}</span>
                    <span class="mt-3"><strong>No. HP </strong><br>{{ Auth::user()->nohp_pegawai }}</span>
                    <span class="mt-3"><strong>Alamat </strong><br>{{ Auth::user()->alamat_pegawai }}</span>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <span><strong>Tanggal Lahir</strong><br>{{ Auth::user()->tgllahir_pegawai }}</span>
                    </div>
                    <div class="col">
                      <span><strong>Lama Bekerja</strong><br>{{ Auth::user()->lama_bekerja }} Tahun</span>
                    </div>
                  </div>
                  <a href="/editpegawai" class="btn btn-custom mt-3 ps-5 pe-5" style="color:white">Edit</a>
                  <a href="tel:{{ Auth::user()->nohp_pegawai }}" class="btn mt-3 ps-5 pe-5" style="color:white; background-color:#56776C;">Hubungi</a>
                  
              </div>
            </div>
          </div>
      </div>
    </section>

@endsection
