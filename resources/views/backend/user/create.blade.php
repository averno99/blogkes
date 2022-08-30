@extends('backend.layouts.app')

@section('content')
    <div class="col">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Tambah Data</h5>

                <div class="col-lg-6">
                    <!-- Vertical Form -->
                    <form class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Password">
                        </div>
                        <div class="text-left">
                            <a href="/users" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- Vertical Form -->
                </div>

            </div>
        </div>

    </div>
@endsection
