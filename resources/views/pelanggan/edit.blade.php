@auth
@extends('app')
@section('content')
<div class="card-body">
    <div class="login-logo">
        <b>Edit Pelanggan</b>
    </div>
    <div class="card">
        @if (session('success'))
        <p class="alert alert-success">
            {{ session('success') }}
        </p>
        @endif
        <div class="card-body login-card-body">
            <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Pelanggan" value="{{ old('nama', $pelanggan->NamaPelanggan) }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-tape"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="telp" placeholder="No Telp"
                        value="{{ old('telp', $pelanggan->NomorTelepon) }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-truck-loading"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                        value="{{ old('alamat', $pelanggan->Alamat) }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-truck-loading"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@endauth