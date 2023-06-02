@extends('layout.template')
        
        <!-- START DATA -->
        @section('konten')
         <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h2>Tabel Pengiriman</h2>
            <a href='{{ url('barang') }}' class="btn btn-secondary">Barang</a>
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('pengiriman') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('pengiriman/create') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">ID</th>
                            <th class="col-md-4">No Pengiriman</th>
                            <th class="col-md-2">Tanggal</th>
                            <th class="col-md-2">ID Lokasi</th>
                            <th class="col-md-2">ID Barang</th>
                            <th class="col-md-2">Jumlah Barang</th>
                            <th class="col-md-2">ID Kurir</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                          <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->no_pengiriman }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->lokasi_id }}</td>
                            <td>{{ $item->barang_id }}</td>
                            <td>{{ $item->jumlah_barang }}</td>
                            <td>{{ $item->kurir_id }}</td>
                            <td>
                                <a href='{{ url('pengiriman/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin ingin hapus data?')" class='d-inline' action="{{ url('pengiriman/'.$item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                                <a href='{{ url('pengiriman/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Submit Pengiriman</a>
                                
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
        
    