@extends('layouts.main')
@section('tabel')
<div class="container-fluid vh-200">
<div class="col-lg-10 mt-2">
    <h2> Detail Transaksi Hardware </h2>
    @method('PUT')
    <div class="row">
        <div class="col">
            <label>Kode Transkasi</label>
            <input type="text" name="kodeth" class="form-control" value="{{$transaksi_hardware->kodeth}}" readonly>
        </div>
        <div class="col">
            <label>Tanggal Pembelian</label>
                <input type="date" name="tgl_pembelian" class="form-control"value="{{$transaksi_hardware->tgl_pembelian}}" readonly>
        </div>
    </div>
    <div class="form-group mt-2">
        <label>Nama Hardware</label>
        <input type="text" name="namahw" class="form-control" value="{{$transaksi_hardware->namahw}}" readonly>
    </div>
    <div class="form-gorup">
        <label>Vendor</label>
        <input type="text" name="namavd" class="form-control" value="{{$transaksi_hardware->namavd}}" readonly>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control" value="{{$transaksi_hardware->harga}}" readonly>
    <div class="form-group">
        <label>Merk</label>
        <input type="text" name="merk" class="form-control" value="{{$transaksi_hardware->merk}}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Spesifikasi</label>
        <textarea class="form-control" name="spesifikasi" rows="3" readonly>{{$transaksi_hardware->spesifikasi}}</textarea>
    </div>
    <div class="row">
        <div class="col">
            <label>No. spk</label>
            <input type="text" name="no_spk" class="form-control" value="{{$transaksi_hardware->no_spk}}" readonly>
        </div>
        <div class="col">
            <label>Tanggal spk</label>
            <input type="date" name="tgl_spk" class="form-control" value="{{$transaksi_hardware->tgl_spk}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>No. do</label>
            <input type="text" name="no_do" class="form-control" value="{{$transaksi_hardware->no_do}}" readonly>
        </div>
        <div class="col">
            <label>Tanggal do</label>
            <input type="date" name="tgl_do" class="form-control" value="{{$transaksi_hardware->tgl_do}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>No. garansi</label>
            <input type="text" name="no_garansi" class="form-control" value="{{$transaksi_hardware->no_garansi}}" readonly>
        </div>
        <div class="col">
            <label>Tanggal garansi</label>
            <input type="date" name="tgl_garansi" class="form-control"  value="{{$transaksi_hardware->tgl_garansi}}" readonly>
        </div>
     </div>
</form>
@endsection
