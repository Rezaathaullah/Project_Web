@extends('layout.template')

@section('title', 'Data Balap Pemoggraman')

@section('content')

    <h1>Data Pembalap Motogp</h1>
    <a href="/balaps/create" class="btn btn-primary">Input Pembalap</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tahun</th>
                <th scope="col">Tim</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($balaps as $balap)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $balap->nama }}</td>
                    <td>{{ $balap->category->nama_kategori }}</td>
                    <td>{{ $balap->tahun }}</td>
                    <td>{{ $balap->tim }}</td>
                    <td class="text-nowrap">
                        <a href="/balap/{{ $balap['id'] }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/balap/delete/{{ $balap->id }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $balaps->links() }}
    </div>
@endsection
