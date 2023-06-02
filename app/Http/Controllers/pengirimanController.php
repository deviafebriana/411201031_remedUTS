<?php

namespace App\Http\Controllers;

use App\Models\pengiriman;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Http\Request;

class pengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10;
        if(strlen($katakunci)){
            $data = pengiriman::where('id','like',"%$katakunci%")
                ->orWhere('no_pengiriman','like',"%$katakunci%")
                ->orWhere('tanggal','like',"%$katakunci%")
                ->orWhere('lokasi_id','like',"%$katakunci%")
                ->orWhere('barang_id','like',"%$katakunci%")
                ->orWhere('jumlah_barang','like',"%$katakunci%")
                ->orWhere('kurir_id','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        } else{
            $data = pengiriman::orderby('id','desc')->paginate($jumlahbaris);
        }
        
        return view('pengiriman.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengiriman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('id',$request->id);
        Session::flash('no_pengiriman',$request->no_pengiriman);
        Session::flash('tanggal',$request->tanggal);
        Session::flash('lokasi_id',$request->lokasi_id);
        Session::flash('barang_id',$request->barang_id);
        Session::flash('jumlah_barang',$request->jumlah_barang);
        Session::flash('kurir_id',$request->kurir_id);
        

        $request->validate([
            'id'=>'required|numeric|unique:pengiriman,id',
            'no_pengiriman'=>'required|numeric|unique:pengiriman,no_pengiriman',
            'tanggal'=>'required',
            'lokasi_id'=>'required',
            'barang_id'=>'required',
            'jumlah_barang'=>'required',
            'kurir_id'=>'required',
        ],[
            'id.required'=> 'ID wajib diisi',
            'id.numeric'=> 'ID wajib angka',
            'id.unique'=> 'ID yang diisi sudah ada di database',
            'no_pengiriman.required'=> 'No Pengiriman wajib diisi',
            'no_pengiriman.numeric'=> 'No Pengiriman wajib angka',
            'no_pengiriman.unique'=> 'No Pengiriman yang diisi sudah ada di database',
            'tanggal.required'=> 'Tanggal wajib diisi',
            'barang_id.required'=> 'ID Barang wajib diisi',
            'lokasi_id'=> 'ID Lokasi wajib diisi',
            'jumlah_barang.required'=> 'Jumlah Barang wajib diisi',
            'kurir_id.required'=> 'ID Kurir wajib diisi',

        ]);
        $data = [
            'id'=>$request->id,
            'no_pengiriman'=>$request->no_pengiriman,
            'tanggal'=>$request->tanggal,
            'lokasi_id'=>$request->lokasi_id,
            'barang_id'=>$request->barang_id,
            'jumlah_barang'=>$request->jumlah_barang,
            'kurir_id'=>$request->kurir_id,

        ];
        pengiriman::create($data);

        return redirect()->to('pengiriman')->with('success','Data sudah diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pengiriman::where('id', $id)->first();
        return view('pengiriman.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            
            
            'no_pengiriman'=>'required',
            'tanggal'=>'required',
            'lokasi_id'=>'required',
            'barang_id'=>'required',
            'jumlah_barang'=>'required',
            'kurir_id'=>'required',
        ],[
            
            'no_pengiriman.required'=> 'Kode Barang wajib diisi',
            'no_pengiriman.numeric'=> 'Kode Barang wajib angka',
            'no_pengiriman.unique'=> 'Kode Barang yang diisi sudah ada di database',
            'tanggal.required'=> 'Nama Barang wajib diisi',
            'lokasi_id.required'=> 'Deskripsi Barang wajib diisi',
            'barang_id.required'=> 'Stok Baraag wajib diisi',
            'jumlah_barang.required'=> 'Harga Barang wajib diisi',
            'kurir_id.required'=> 'Harga Barang wajib diisi',

        ]);
        $data = [
           
            'no_pengiriman'=>$request->no_pengiriman,
            'tanggal'=>$request->tanggal,
            'lokasi_id'=>$request->lokasi_id,
            'barang_id'=>$request->barang_id,
            'jumlah_barang'=>$request->jumlah_barang,
            'kurir_id'=>$request->kurir_id,

        ];
        pengiriman::where('id',$id)->update($data);

        return redirect()->to('pengiriman')->with('success','Data sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengiriman::where('id',$id)->delete();
        return redirect()->to('pengiriman')->with('success','Berhasil delete data');
    }
}
