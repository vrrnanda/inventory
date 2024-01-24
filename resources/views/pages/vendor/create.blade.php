@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
<div class="col-lg-10 vh-100 p-2">
    <h2> Tambah Data Vendor </h2>
    <form action="/vendor/simpan" method="POST"> 
        @csrf 
        <div class="form-group w-20 p-2">
            <label> Kode Vendor</label>
            <input type="text" name="kodevd" class="form-control" placeholder="Masukkan Kode Vendor" required>
        </div>
        <div class= "form-group w-100 p-2">
            <label> Nama Vendor </label>
            <input type="text" name="namavd" class="form-control" placeholder="Masukkan Nama Vendor" required>
        </div>
        <div class="mb-3">
            <label> No. Telp</label>
            <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomor Telpon" required>
          </div>
          <div class="mb-3">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"></textarea>
          </div>
        <div class="form-group w-25 mt-2 p-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
</div>
</div>
@endsection