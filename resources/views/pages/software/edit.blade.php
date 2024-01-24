@extends('layouts.main')
@section('tabel')
<div class="container-fluid">
<div class="col-lg-10 vh-100 p-2">
    <h2> Edit Data Software</h2>
    <form action="/software/update/{{ $software->id}}" method="POST"> 
        @csrf
        @method('PUT')
        <div class="form-group w-20 p-2">
            <label> Kode Software</label>
            <input type="text" name="kodesw" class="form-control" value="{{$software-> kodesw}}" readonly>
        </div>
        <div class= "form-group w-100 p-2">
            <label> Nama Software </label>
            <input type="text" name="namasw" class="form-control" value="{{$software-> namasw}}" required>
        </div>
        <div class="form-group w-25 mt-2 p-2">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
</div>
</div>
@endsection