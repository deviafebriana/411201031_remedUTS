@extends('layout.template')
<!-- START FORM -->
@section('konten')

 <form action='{{ url('pengiriman') }}' method='post'>
    @csrf 
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('pengiriman') }}' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{ Session::get('id') }}" name='id' id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_pengiriman" class="col-sm-2 col-form-label">No Pengiriman</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_pengiriman' value="{{ Session::get('no_pengiriman') }}" id="no_pengiriman">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lokasi_id" class="col-sm-2 col-form-label">ID Lokasi</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='lokasi_id' value="{{ Session::get('lokasi_id') }}" id="lokasi_id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="barang_id" class="col-sm-2 col-form-label">ID Barang</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='barang_id' value="{{ Session::get('barang_id') }}" id="barang_id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='jumlah_barang' value="{{ Session::get('jumlah_barang') }}" id="jumlah_barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kurir_id" class="col-sm-2 col-form-label">ID Kurir</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kurir_id' value="{{ Session::get('kurir_id') }}" id="kurir_id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kurir_id" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->   
@endsection
