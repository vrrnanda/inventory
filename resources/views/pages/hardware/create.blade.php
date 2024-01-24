@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
<div class="col-lg-10 vh-100 p-2">
    <h2> Tambah Data Hardware </h2>
    <form action="/hardware/simpan" method="POST"> 
        @csrf 
        <div class="form-group w-20 p-2">
            <label> Kode Hardware</label>
            <input type="text" name="kodehw" class="form-control" placeholder="Masukkan Kode Hardware" required>
        </div>
        <div class= "form-group w-100 p-2">
            <label> Nama Hardware </label>
            <input type="text" name="namahw" class="form-control" placeholder="Masukkan Nama Hardware" required>
        </div>
        <div class="form-group w-25 mt-2 p-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
</div>
</div>
@endsection