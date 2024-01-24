@extends('layouts.main')
@section('tabel')
<div class="container-fluid vh-200">
<div class="col-lg-10 mt-2">
    <h2> Tambah Data Penempatan Barang </h2>
    <form action="/penempatan/simpan" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label>Kode Lokasi</label>
                <input type="text" name="kodelok" class="form-control" placeholder="Kode Lokasi" required>
            </div>
        <div class="form-group mt-2">
            <label>Nama Barang</label>
            <input type="text" name="namabrg" class="form-control" placeholder="Masukkan Nama Barang" required>
        </div>
        <div class="form-gorup">
        <label>Ruangan</label>
        <select class="form-select" input="text" name="namarg">
            <option value="" disabled selected hidden>Pilih Ruangan</option>
            @foreach($ruang as $item)
            <option value="{{$item->namarg}}">{{$item->namarg}}</option>
            @endforeach
          </select>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah Barang">
            </div>
            <div class="col">
            <label>Tanggal Penempatan</label>
                <input type="date" name="tgllok" class="form-control">
            </div>
        </div>
        <div class="form-group w-25 mt-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
@endsection
