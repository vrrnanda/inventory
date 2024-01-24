@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
<div class="col-lg-10 vh-100 p-2">
    <h2> Edit Data Hardware </h2>
    <form action="/hardware/update/{{ $hardware->id}}" method="POST"> 
        @csrf
        @method('PUT')
        <div class="form-group w-20 p-2">
            <label> Kode Hardware</label>
            <input type="text" name="kodehw" class="form-control" value="{{$hardware-> kodehw}}" readonly>
        </div>
        <div class= "form-group w-100 p-2">
            <label> Nama Hardware </label>
            <input type="text" name="namahw" class="form-control" value="{{$hardware-> namahw}}" required>
        </div>
        <div class="form-group w-25 mt-2 p-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
</div>
</div>
@endsection