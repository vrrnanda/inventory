@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap mt-2">
        <h2 class="fw-semiboldw"> Data Hardware </h2>
        <div class="btn-group p-2">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Daftar Barang </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/hardware">Hardware</a></li>
                <li><a class="dropdown-item" href="/software">Software</a></li>
                <li><a class="dropdown-item" href="/vendor">Vendor</a></li>
            </div>
        </div>
        <div class="d-flex justify-content-between gap-2 flex-wrap">
            <a href="/hardware/tambah" class="btn btn-outline-primary p-2">
                <i class="bi bi-plus-square-fill"></i> Tambah Data </a>
            </div>
                <form class="form-inline d-flex w-50" method="GET" action="/hardware/cari">
                    <input class="form-control me-2 w-50 mt-2" name="cari" type="text" placeholder="Pencarian">
                    <button class="btn btn-outline-primary mt-2" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <div class="col-lg-12 p-2">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col"> No. </th>
                            <th class="text-center" scope="col"> Kode Hardware</th>
                            <th class="text-center" scope="col"> Nama Hardware</th>
                            <th class="text-center" scope="col"> Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hardware as $no => $h)
                        <tr>
                            <th class="text-center" scope="row">{{$hardware-> firstItem() +$no}}</th>
                            <td class="text-center">{{ $h->kodehw}}</td>
                            <td class="text-center">{{ $h->namahw}}</td>
                            <td class="text-center">
                                <a href="/hardware/edit/{{$h->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="/hardware/hapus/{{$h->id}}"  onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <span class="float-right">{{$hardware-> links()}}</span>
            </div>
@endsection
