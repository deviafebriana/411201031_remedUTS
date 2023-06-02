@extends('layout.template')
<!-- START FORM -->
@section('konten')

 <form action='{{ url('kurir') }}' method='post'>
    @csrf 
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('kurir') }}' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value="{{ Session::get('id') }}" name='id' id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama Kurir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='name' value="{{ Session::get('name') }}" id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email Kurir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="{{ Session::get('email') }}" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='password' value="{{ Session::get('password') }}" id="password">
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
