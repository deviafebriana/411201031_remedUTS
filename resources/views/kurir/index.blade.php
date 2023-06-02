@extends('layout.template')
        
        <!-- START DATA -->
        @section('konten')
         <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h2>Tabel Kurir</h2>
            <a href='{{ url('barang') }}' class="btn btn-secondary">Input Barang</a>
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('kurir') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('kurir/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">ID</th>
                            <th class="col-md-4">Nama Kurir</th>
                            <th class="col-md-2">Email Kurir</th>
                            <th class="col-md-2">Password</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                          <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>
                                <a href='{{ url('kurir/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin ingin hapus data?')" class='d-inline' action="{{ url('kurir/'.$item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                                
                            </td>
                        </tr>  
                        <?php $i++ ?>
                        @endforeach
                        
                    </tbody>
                </table>
               {{ $data->withQueryString()->links() }}
          </div>
          <!-- AKHIR DATA -->   
        @endsection