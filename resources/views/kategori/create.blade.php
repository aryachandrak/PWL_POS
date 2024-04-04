@extends('layouts.app')

{{-- Custumize layout section --}}

@section('subtitle', 'welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card-body">
            <h3 class="card-title">Buat kategori baru</h3>
        </div>

        <form action="{{ route('kategori') }}" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" id="katagori_kode" name="kategori_kode" class="form-controll @error('kategori_kode') is-invalid @enderror">
                    @error('kategori_kode')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                

                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
@endsection

