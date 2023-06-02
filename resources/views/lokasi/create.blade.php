@extends('layout.template')
<!-- START FORM -->
@section('konten')

 <form action='{{ url('lokasi') }}' method='post'>
    @csrf 
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('lokasi') }}' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{ Session::get('id') }}" name='id' id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kode_lokasi" class="col-sm-2 col-form-label">Kode Lokasi</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='kode_lokasi' value="{{ Session::get('kode_lokasi') }}" id="kode_lokasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_lokasi" class="col-sm-2 col-form-label">Nama Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_lokasi' value="{{ Session::get('nama_lokasi') }}" id="nama_lokasi">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_lokasi" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->   
@endsection
