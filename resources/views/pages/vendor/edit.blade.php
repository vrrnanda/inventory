@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
<div class="col-lg-10 vh-100 p-2">
    <h2> Edit Data Vendor </h2>
    <form action="/vendor/update/{{ $vendor->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label> Kode Vendor</label>
            <input type="text" name="kodevd" class="form-control" value={{$vendor->kodevd}} readonly>
        </div>
        <div class= "form-group mb-3">
            <label> Nama Vendor </label>
            <input type="text" name="namavd" class="form-control"value={{$vendor->namavd}}>
        </div>
        <div class="mb-3">
            <label> No. Telp</label>
            <input type="text" name="no_telp" class="form-control" value="{{$vendor->no_telp}}">
          </div>
          <div class="mb-3">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"> value={{$vendor->alamat}}</textarea>
          </div>
        <div class="form-group w-25 mt-2 p-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
</div>
</div>
@endsection
