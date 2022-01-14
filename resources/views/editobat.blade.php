@extends('app')

@section('content')
<!-- Content -->
<section id="content" class="mb-4">
    <div class="container">
        <div class="title mb-3">
          <br>
          <h2>Edit Obat</h2>
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
                    <img src="img/obat-panadol.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="container">
                    <div class="card" style="background-color: #FAEBE0;">
                        <div class="card-body">
                            <form action="{{ route('editobat', ['index'=>$o->kode_obat]) }}" method="post" >
                                @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="name">Kode Obat</label>
                                        <input type="text" class="form-control" name ="kodeobat" placeholder="Masukkan kode Obat" value="{{ $o -> kode_obat}}" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="nobatch">No Batch</label>
                                        <input type="text" class="form-control" name ="nobatch" placeholder="Masukkan no Bacth" value="{{ $o -> no_batch}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="namaobat">Nama Obat</label>
                                        <input type="text" class="form-control" name ="namaobat" placeholder="Masukkan nama obat" value="{{ $o -> nama_obat}}"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text" class="form-control" name ="deskripsi" placeholder="Masukkan deskripsi" value="{{ $o -> deskripsi_obat}}"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="kategori">Kategori</label>
                                        <input type="text" class="form-control" name ="kategori" placeholder="Masukkan kategori" value="{{ $o -> kategori}}"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="kedaluarsa">Tanggal Kadaluarsa</label>
                                            <input type="date" class="form-control" name ="kedaluarsa" placeholder="Masukkan Tanggal Kadaluarsa" value="{{ $o -> tgl_expired}}"/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="stok">Stok</label>
                                            <input type="text" class="form-control" name ="stok" placeholder="Masukkan Stok" value="{{ $o -> stok}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="berat">Berat</label>
                                            <input type="text" class="form-control" name ="berat" placeholder="Masukkan Berat" value="{{ $o -> berat_satuan}}"/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="stok">Satuan</label>
                                            <input type="text" class="form-control" name ="satuan" placeholder="Masukkan Satuan" value="{{ $o -> satuan}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="hargabeli">Harga Beli</label>
                                            <input type="text" class="form-control" name ="hargabeli" placeholder="Masukkan Harga Beli" value="{{ $o -> harga_beli}}"/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="hargajual">Harga Jual</label>
                                            <input type="text" class="form-control" name ="hargajual" placeholder="Masukkan Harga " value="{{ $o -> harga_jual}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <a href="/catalog" class="btn btn-outline-danger mt-3 ps-5 pe-5">Batal</a>
                                        <button type="submit" class="btn btn-custom mt-3 ps-5 pe-5" style="color:white">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

@endsection