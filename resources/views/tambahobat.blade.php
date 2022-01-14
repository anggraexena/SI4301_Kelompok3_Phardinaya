@extends('app')

@section('content')
<!-- Content -->
<section id="content">
    <div class="container">
        <div class="title">
          <br>
          <h2>Tambah Obat</h2>
        </div>
    </div>
</section>
<!-- Akhir Konten -->
<section id="formulir">
    <div class="container">
        <div class="card-body p-10">
            <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="card" style="background-color: #FAEBE0;">
                        <div class="card-body">
                        <form action="" method="GET" >
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="name">Kode Obat</label>
                                <input type="text" class="form-control" name ="kodeobat" placeholder="Masukkan kode Obat" value="PCT"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="nobatch">No Batch</label>
                                <input type="text" class="form-control" name ="nobatch" placeholder="Masukkan no Bacth" value="B10/121/1"/>
                            </div>
                        </div>
                    </div>
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="namaobat">Nama Obat</label>
                                <input type="text" class="form-control" name ="namaobat" placeholder="Masukkan nama obat" value="Paracteamol"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" name ="deskripsi" placeholder="Masukkan deskripsi" value="Obat pracetamol adalah obat untuk meredakan rasa sakit"/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-2">
                                <label for="kategori">Kategori</label>
                                <input type="text" class="form-control" name ="kategori" placeholder="Masukkan kategori" value="Obat Bebas"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="kedaluarsa">Tanggal Kadaluarsa</label>
                                    <input type="date" class="form-control" name ="kedaluarsa" placeholder="Masukkan Tanggal Kadaluarsa" value="11/02/2021"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="stok">Stok</label>
                                    <input type="text" class="form-control" name ="stok" placeholder="Masukkan Stok" value="100"/>
                                </div>
                            </div>
                    </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="berat">Berat</label>
                                    <input type="text" class="form-control" name ="berat" placeholder="Masukkan Berat" value="20"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="stok">Satuan</label>
                                    <input type="text" class="form-control" name ="satuan" placeholder="Masukkan Satuan" value="mg"/>
                                </div>
                            </div>
                    </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="hargabeli">Harga Beli</label>
                                    <input type="text" class="form-control" name ="hargabeli" placeholder="Masukkan Harga Beli" value="19.000"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-2">
                                    <label for="hargajual">Harga Jual</label>
                                    <input type="text" class="form-control" name ="hargabeli" placeholder="Masukkan Harga " value="20.000"/>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="btn btn-outline-danger mt-3 ps-5 pe-5">Batal</a>
                            <a href="/catalog" class="btn btn-custom mt-3 ps-5 pe-5" style="color:white">Simpan</a>
                        </div>
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