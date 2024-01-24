@extends('layouts.main')
@section('tabel')
<div class="container-fluid vh-200">
<div class="col-lg-10 mt-2">
    <h2> Edit Data Penempatan Barang </h2>
    <form action="/penempatan/update/ {{$lokasi->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label>Kode Lokasi</label>
                <input type="text" name="kodelok" class="form-control" value="{{$lokasi->kodelok}}" readonly>
            </div>
        <div class="form-group mt-2">
            <label>Nama Barang</label>
            <input type="text" name="namabrg" class="form-control" value="{{$lokasi->namabrg}}">
        </div>
        <div class="form-gorup">
        <label>Ruangan</label>
        <select name="namarg" class="form-control" value="{{$lokasi->namarg}}">
            @foreach($ruang as $item)
            <option value="{{$item->namarg}}">{{$item->namarg}}</option>
            @endforeach
          </select>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control" value="{{$lokasi->jumlah}}">
            </div>
            <div class="col">
            <label>Tanggal Penempatan</label>
                <input type="date" name="tgllok" class="form-control" value="{{$lokasi->tgllok}}">
            </div>
        </div>
        <div class="form-group w-25 mt-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
@endsection
