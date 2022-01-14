@extends('app')

@section('content')
    <!-- Content -->
    <section id="content">
        <div class="container justify-content-center">
            <div class="row mt-5">
                <div class="container col-4" style="padding-top: 10px">
                    <div class="card mb-10">
                        <div class="card-body">
                        <div class="col text-center">
                            <h6><strong>Login</strong></h6>
                            <hr style="border: 1px solid gray">
                        </div>
                        <form action="/post_login" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="username" placeholder="Masukkan username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan kata sandi " required>
                            </div>
                            <div class="col mb-3 text-center">
                                <a href="/" type="submit" name="login" class="btn btn-custom"><strong>LOGIN</strong></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir konten -->
@endsection