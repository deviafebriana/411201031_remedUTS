@extends('layout.template')
<!-- START FORM -->
@section('konten')

 <form action='{{ url('kurir/'.$data->id) }}' method='post'>
    @csrf 
    @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('kurir') }}' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    {{ $data->id }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama Kurir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' value="{{ $data->name }}" id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email Kurir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="{{ $data->email }}" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='password' value="{{ $data->deskripsi }}" id="password">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->   
@endsection
