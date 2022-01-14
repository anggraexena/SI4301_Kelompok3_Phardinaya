@extends('app')

@section('content')
<!-- Content -->
<section id="content" class="mb-4">
    <div class="container">
        <div class="title mb-3">
          <br>
          <h2>Edit Pegawai</h2>
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
                    <img src="https://icon-library.com/images/user-icon-flat/user-icon-flat-6.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="container">
                    <div class="card" style="background-color: #FAEBE0;">
                        <div class="card-body">
                            <form action="{{ route('editpegawai', ['index'=>Auth::user()->id]) }}" method="post" >
                                @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name ="namapegawai" value="{{ Auth::user()->nama_pegawai}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="nobatch">Email</label>
                                        <input type="email" class="form-control" name ="email" value="{{ Auth::user()->email}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="namaobat">No Handphone</label>
                                        <input type="number" class="form-control" name ="nohp_pegawai" value="{{ Auth::user()->nohp_pegawai}}"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="deskripsi">Alamat</label>
                                        <input type="text" class="form-control" name ="alamat" value="{{ Auth::user()->alamat_pegawai}}"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group mb-2">
                                        <label for="kategori">Tanggal Diterima</label>
                                        <input type="text" class="form-control" name ="tgl_diterima" value="{{ Auth::user()->tgl_diterima}}" readonly/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="kedaluarsa">Lama bekerja</label>
                                            <input type="text" class="form-control" name ="lamabekerja" value="{{ Auth::user()->lama_bekerja}}" readonly/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="stok">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name ="tgllahir_pegawai" value="{{ Auth::user()->tgllahir_pegawai}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-2">
                                            <label for="berat">Umur</label>
                                            <input type="text" class="form-control" name ="umur" value="{{ Auth::user()->umur_pegawai}}" readonly/>
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