@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap mt-2">
        <h2 class="fw-semiboldw"> Data Transaksi Software</h2>
    </div>
    <div class="d-flex justify-content-between">
        <a href="/transaksisoftware/tambah" class="btn btn-outline-primary mt-2"><i class="bi bi-plus-square-fill"></i> Tambah Data </a>
        <a href="/transaksisoftware/cetak" class="btn btn-outline-primary mt-2"><i class="bi bi-printer"></i> Cetak </a>
    </div>
    <form class="form-inline d-flex w-50" method="GET" action="/transaksisoftware/cari">
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
                        <th class="text-center" width="50px" scope="col"> No.</th>
                        <th class="text-center" width="100px" scope="col"> Kode Transaksi</th>
                        <th class="text-center" width="150px" scope="col"> Nama Software</th>
                        <th class="text-center" width="150px" scope="col"> Vendor</th>
                        <th class="text-center" width="150px" scope="col"> Merk</th>
                        <th class="text-center" width="100px" scope="col"> Tanggal Pembelian</th>
                        <th class="text-center" width="100px" scope="col"> Harga</th>
                        <th class="text-center" width="200px" scope="col"> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi_software as $no => $ts)
                    <tr>
                        <th scope="row">{{$transaksi_software-> firstItem() +$no}}</th>
                        <td class="text-center">{{ $ts->kodets}}</td>
                        <td class="text-center">{{ $ts->namasw}}</td>
                        <td class="text-center">{{ $ts->namavd}}</td>
                        <td class="text-center">{{ $ts->merk}}</td>
                        <td class="text-center">{{ $ts->tgl_pembelian}}</td>
                        <td class="text-center">{{ $ts->harga}}</td>
                        <td class="text-center">
                            <a href="/transaksisoftware/detail/{{$ts->id}}" class="btn btn-outline-info"><i class="bi bi-eye"></i></i></a>
                            <a href="/transaksisoftware/edit/{{$ts->id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="/transaksisoftware/hapus/{{$ts->id}}"  onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{$transaksi_software-> links()}}</span>
        </div>
        @endsection
