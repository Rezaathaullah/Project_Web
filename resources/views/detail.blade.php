@extends('layout.template')

@section('title', $balap ? $balap->nama : 'Detail Balap')

@section('content')
    @if ($balap)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-9">
                    <div class="card-body">
                        <h2 class="card-title">{{ $balap->nama }}</h2>
                        <p class="card-text">{{ $balap->sinopsis }}</p>
                        <p class="card-text">Kategori :
                            {{ $balap->category ? $balap->category->nama_kategori : 'Tidak ada kategori' }}</p>
                        <p class="card-text">Tahun : {{ $balap->tahun }}</p>
                        <p class="card-text">Tim : {{ $balap->tim }}</p>
                        <a href="/" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/images/{{ $balap->foto_sampul }}" class="img-fluid rounded-end" alt="...">
                </div>
            </div>
        </div>
    @else
        <p>Data balap tidak ditemukan.</p>
    @endif
@endsection
