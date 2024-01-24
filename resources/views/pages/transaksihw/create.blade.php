@extends('layouts.main')
@section('tabel')
<div class="container-fluid vh-200">
<div class="col-lg-10 mt-2">
    <h2> Tambah Data Transaksi Hardware </h2>
    <form action="/transaksihardware/simpan" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label>Kode Transkasi</label>
                <input type="text" name="kodeth" class="form-control" placeholder="Kode Transaksi">
            </div>
            <div class="col">
            <label>Tanggal Pembelian</label>
                <input type="date" name="tgl_pembelian" class="form-control" placeholder="Tanggal">
            </div>
        </div>
        <div class="form-group mt-2">
            <label>Nama Hardware</label>
            <input type="text" name="namahw" class="form-control" placeholder="Masukkan Nama Hardware" required>
        </div>
        <div class="form-gorup">
        <label>Vendor</label>
        <select class="form-select" name="namavd">
            <option value="" disabled selected hidden>Pilih Vendor</option>
            @foreach($vendor as $item)
            <option value="{{$item->namavd}}">{{$item->namavd}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required>
        <div class="form-group">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control" placeholder="Masukkan Merk Hardware" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Spesifikasi</label>
            <textarea class="form-control" name="spesifikasi" placeholder="Masukkan Spesifikasi" rows="3"></textarea>
        </div>
        <div class="row">
            <div class="col">
                <label>No. spk</label>
                <input type="text" name="no_spk" class="form-control" placeholder="Nomor spk" aria-label="no spk">
            </div>
            <div class="col">
            <label>Tanggal spk</label>
                <input type="date" name="tgl_spk" class="form-control" aria-label="tanggal spk">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>No. do</label>
                <input type="text" name="no_do" class="form-control" placeholder="Nomor do" aria-label="no spk">
            </div>
            <div class="col">
            <label>Tanggal do</label>
                <input type="date" name="tgl_do" class="form-control" aria-label="tanggal do">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>No. garansi</label>
                <input type="text" name="no_garansi" class="form-control" placeholder="Nomor Garansi" aria-label="no_garansi">
            </div>
            <div class="col">
            <label>Tanggal garansi</label>
                <input type="date" name="tgl_garansi" class="form-control"  aria-label="tanggal garansi">
            </div>
        </div>
        <div class="form-group w-25 mt-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
@endsection
