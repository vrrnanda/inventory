@extends('layouts.main')
@section('tabel')
<div class="container-fluid vh-200">
<div class="col-lg-10 mt-2">
    <h2> Tambah Data Transaksi Hardware </h2>
    <form action="/transaksihardware/update/ {{$transaksi_hardware->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label>Kode Transkasi</label>
                <input type="text" name="kodeth" class="form-control" value="{{$transaksi_hardware->kodeth}}" readonly>
            </div>
            <div class="col">
            <label>Tanggal Pembelian</label>
                <input type="date" name="tgl_pembelian" class="form-control"value="{{$transaksi_hardware->tgl_pembelian}}">
            </div>
        </div>
        <div class="form-group mt-2">
            <label>Nama Hardware</label>
            <input type="text" name="namahw" class="form-control" value="{{$transaksi_hardware->namahw}}">
        </div>
        <div class="form-gorup">
        <label>Vendor</label>
        <select class="form-select" name="namavd" value="{{$transaksi_hardware->namavd}}">
            @foreach($vendor as $item)
            <option value="{{$item->namavd}}">{{$item->namavd}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="{{$transaksi_hardware->harga}}">
        <div class="form-group">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control" value="{{$transaksi_hardware->merk}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Spesifikasi</label>
            <textarea class="form-control" name="spesifikasi" rows="3">{{$transaksi_hardware->spesifikasi}}</textarea>
        </div>
        <div class="row">
            <div class="col">
                <label>No. spk</label>
                <input type="text" name="no_spk" class="form-control" value="{{$transaksi_hardware->no_spk}}">
            </div>
            <div class="col">
            <label>Tanggal spk</label>
                <input type="date" name="tgl_spk" class="form-control" value="{{$transaksi_hardware->tgl_spk}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>No. do</label>
                <input type="text" name="no_do" class="form-control" value="{{$transaksi_hardware->no_do}}">
            </div>
            <div class="col">
            <label>Tanggal do</label>
                <input type="date" name="tgl_do" class="form-control" value="{{$transaksi_hardware->tgl_do}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>No. garansi</label>
                <input type="text" name="no_garansi" class="form-control" value="{{$transaksi_hardware->no_garansi}}">
            </div>
            <div class="col">
            <label>Tanggal garansi</label>
                <input type="date" name="tgl_garansi" class="form-control"  value="{{$transaksi_hardware->tgl_garansi}}">
            </div>
        </div>
        <div class="form-group w-25 mt-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
@endsection
