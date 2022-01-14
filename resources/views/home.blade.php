@extends('app')

@section('content')
<!-- Content -->
<section id="content">
    <div class="container">
        <div class="greetings">
          <br>
          <h2>Selamat Datang, 
            @if(\Auth::check())
              {{ Auth::user()->nama_pegawai }}
            @else
              NULL
            @endif
          </h2>
        </div>
        <div class="row mt-4">
          <div class="col">
            <div class="card" style="background-color:#FAEBE0;border-radius:10px;">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:5px;padding-bottom:0px;">Pelanggan <i class="fas fa-users" style="float:right;"></i></p>
                <h3 style="margin-top:0;padding-top:0px;">190</h3>
                <div class="progress" style="background-color:#D1CBC6;">
                  <div class="progress-bar" role="progressbar" style="width: 50%; background-color:#34B678;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="background-color:#E0D5CA;border-radius:10px;">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:5px;padding-bottom:0px;">Produk <i class="fas fa-capsules" style="float:right;"></i></p>
                <h3 style="margin-top:0;padding-top:0px;">100</h3>
                <div class="progress" style="background-color:#D1CBC6;">
                  <div class="progress-bar" role="progressbar" style="width: 70%; background-color:#34B678;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="background-color:#D0C1AF;border-radius:10px;">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:5px;padding-bottom:0px;">Transaksi hari ini <i class="fas fa-exchange-alt" style="float:right;"></i></p>
                <h3 style="margin-top:0;padding-top:0px;">Rp 230.000</h3>
                <div class="progress" style="background-color:#D1CBC6;">
                  <div class="progress-bar" role="progressbar" style="width: 10%; background-color:#34B678;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="background-color:#C1AC95;border-radius:10px;">
              <div class="card-body">
                <p class="card-text" style="margin-bottom:5px;padding-bottom:0px;">Transaksi bulan ini <i class="fas fa-exchange-alt" style="float:right;"></i></p>
                <h3 style="margin-top:0;padding-top:0px;">Rp 10.000.000</h3>
                <div class="progress" style="background-color:#D1CBC6;">
                  <div class="progress-bar" role="progressbar" style="width: 50%; background-color:#34B678;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<!-- Akhir Konten -->

@endsection