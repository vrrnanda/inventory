@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap mt-2">
        <h2 class="fw-semiboldw"> Lokasi Barang </h2>
    </div>
        <div class="d-flex justify-content-between">
            <a href="/penempatan/tambah" class="btn btn-outline-primary mt-2"><i class="bi bi-plus-square-fill"></i> Tambah Data </a>
            <a href="/penempatan/cetak" class="btn btn-outline-primary mt-2"><i class="bi bi-printer"></i> Cetak </a>
        </div>
        <form class="form-inline d-flex w-50" method="GET" action="/penempatan/cari">
            <input class="form-control me-2 w-50 mt-2" name="cari" type="text" placeholder="Pencarian">
            <button class="btn btn-outline-primary mt-2" type="submit"><i class="bi bi-search"></i></button>
        </form>
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        <table class="table table-hover mt-2">
            <thead class="thead-light">
                <tr>
                    <th class="text-center" scope="col"> No. </th>
                            <th class="text-center" scope="col"> Kode Lokasi</th>
                            <th class="text-center" scope="col"> Nama Barang</th>
                            <th class="text-center" scope="col"> Ruangan</th>
                            <th class="text-center" scope="col"> Jumlah</th>
                            <th class="text-center" scope="col"> Tanggal</th>
                            <th class="text-center" scope="col"> Aksi</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach($lokasi as $no => $l)
                    <tr>
                        <th class="text-center" scope="row">{{$lokasi-> firstItem() +$no}}</th>
                        <td class="text-center">{{ $l->kodelok}}</td>
                        <td class="text-center">{{ $l->namabrg}}</td>
                        <td class="text-center">{{ $l->namarg}}</td>
                        <td class="text-center">{{ $l->jumlah}}</td>
                        <td class="text-center">{{ $l->tgllok}}</td>
                        <td class="text-center">
                            <a href="/penempatan/edit/{{$l->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="/penempatan/hapus/{{$l->id}}"  onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
