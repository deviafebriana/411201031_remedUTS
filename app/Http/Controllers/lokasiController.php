<?php

namespace App\Http\Controllers;

use App\Models\lokasi;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Http\Request;

class lokasiController extends Controller
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
            $data = lokasi::where('id','like',"%$katakunci%")
                ->orWhere('kode_lokasi','like',"%$katakunci%")
                ->orWhere('nama_lokasi','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        } else{
            $data = lokasi::orderby('id','desc')->paginate($jumlahbaris);
        }
        
        return view('lokasi.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi.create');
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
        Session::flash('kode_lokasi',$request->kode_lokasi);
        Session::flash('nama_lokasi',$request->nama_lokasi);
        

        $request->validate([
            'id'=>'required|numeric|unique:lokasi,id',
            'kode_lokasi'=>'required',
            'nama_lokasi'=>'required',
            
        ],[
            'id.required'=> 'ID wajib diisi',
            'id.numeric'=> 'ID wajib angka',
            'id.unique'=> 'ID yang diisi sudah ada di database',
            'kode_lokasi.required'=> 'Kode Lokasi wajib diisi',
            'kode_lokasi.numeric'=> 'Kode Lokasi wajib angka',
            'nama_lokasi.required'=> 'Nama Lokasi wajib diisi',
        ]);
        $data = [
            'id'=>$request->id,
            'kode_lokasi'=>$request->kode_lokasi,
            'nama_lokasi'=>$request->nama_lokasi,

        ];
        lokasi::create($data);

        return redirect()->to('lokasi')->with('success','Data sudah diinput');
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
        $data = lokasi::where('id', $id)->first();
        return view('lokasi.edit')->with('data', $data);
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
            
            
            'kode_lokasi'=>'required',
            'nama_lokasi'=>'required',
            
        ],[
            
            'kode_lokasi.required'=> 'Kode Lokasi wajib diisi',
            'kode_lokasi.numeric'=> 'Kode Lokasi wajib angka',
            'nama_lokasi.required'=> 'Nama Lokasi wajib diisi',

        ]);
        $data = [
           
            'kode_lokasi'=>$request->kode_lokasi,
            'nama_lokasi'=>$request->nama_lokasi,

        ];
        lokasi::where('id',$id)->update($data);

        return redirect()->to('lokasi')->with('success','Data sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lokasi::where('id',$id)->delete();
        return redirect()->to('lokasi')->with('success','Berhasil delete data');
    }
}
