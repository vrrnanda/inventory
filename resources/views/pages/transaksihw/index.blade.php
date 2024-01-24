@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap mt-2">
        <h2 class="fw-semiboldw"> Data Transaksi Hardware</h2>
    </div>
    <div class="d-flex justify-content-between">
        <a href="/transaksihardware/tambah" class="btn btn-outline-primary mt-2"><i class="bi bi-plus-square-fill"></i> Tambah Data </a>
        <a href="/transaksihardware/cetak" class="btn btn-outline-primary mt-2"><i class="bi bi-printer"></i> Cetak </a>
    </div>
    <form class="form-inline d-flex w-50" method="GET" action="/transaksihardware/cari">
        <input class="form-control me-2 w-50 mt-2" name="cari" type="text" placeholder="Pencarian">
        <button class="btn btn-outline-primary mt-2" type="submit"><i class="bi bi-search"></i></button>
    </form>
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"></button>
    </div>
    @endif
    <table class="table table-hover mt-2">
        <thead class="thead-light">
            <tr>
                <th class="text-center" width="50px" scope="col"> No.</th>
                <th class="text-center" width="100px" scope="col"> Kode Transaksi</th>
                <th class="text-center" width="150px" scope="col"> Nama Hardware</th>
                <th class="text-center" width="150px" scope="col"> Vendor</th>
                <th class="text-center" width="150px" scope="col"> Merk</th>
                <th class="text-center" width="150px" scope="col"> Tanggal Pembelian</th>
                <th class="text-center" width="100px" scope="col"> Harga</th>
                <th class="text-center" width="200px" scope="col"> Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi_hardware as $no => $th)
            <tr>
                <th class="text-center" scope="row">{{$transaksi_hardware-> firstItem() +$no}}</th>
                <td class="text-center">{{ $th->kodeth}}</td>
                <td class="text-center">{{ $th->namahw}}</td>
                <td class="text-center">{{ $th->namavd}}</td>
                <td class="text-center">{{ $th->merk}}</td>
                <td class="text-center">{{ $th->tgl_pembelian}}</td>
                <td class="text-center">{{ $th->harga}}</td>
                <td class="text-center">
                    <a href="/transaksihardware/detail/{{$th->id}}" class="btn btn-outline-info"><i class="bi bi-eye"></i></i></a>
                    <a href="/transaksihardware/edit/{{$th->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                    <a href="/transaksihardware/hapus/{{$th->id}}"  onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <span class="float-right">{{$transaksi_hardware-> links()}}</span>
</div>
@endsection
