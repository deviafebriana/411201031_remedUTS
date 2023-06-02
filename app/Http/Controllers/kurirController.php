<?php

namespace App\Http\Controllers;

use App\Models\kurir;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Paginator;
use Illuminate\Http\Request;

class kurirController extends Controller
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
            $data = kurir::where('id','like',"%$katakunci%")
                ->orWhere('name','like',"%$katakunci%")
                ->orWhere('email','like',"%$katakunci%")
                ->orWhere('password','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        } else{
            $data = kurir::orderby('id','desc')->paginate($jumlahbaris);
        }
        
        return view('kurir.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurir.create');
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
        Session::flash('name',$request->name);
        Session::flash('email',$request->email);
        Session::flash('password',$request->password);
        

        $request->validate([
            'id'=>'required|numeric|unique:kurir,id',
            'name'=>'required',
            'email'=>'required|unique:kurir,email',
            'password'=>'required|unique:kurir,password',
            
        ],[
            'id.required'=> 'ID wajib diisi',
            'id.numeric'=> 'ID wajib angka',
            'id.unique'=> 'ID yang diisi sudah ada di database',
            'name.required'=> 'Nama Kurir wajib diisi',
            'email.required'=> 'Email Kurir wajib diisi',
            'email.unique'=> 'Email yang diisi sudah ada di database',
            'password.required'=> 'Password wajib diisi',
            'password.unique'=> 'Password yang diisi sudah ada di database',

        ]);
        $data = [
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,

        ];
        kurir::create($data);

        return redirect()->to('kurir')->with('success','Data sudah diinput');
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
        $data = kurir::where('id', $id)->first();
        return view('kurir.edit')->with('data', $data);
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
            
            
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            
        ],[
            
            'name.required'=> 'Nama Kurir wajib diisi',
            'email.required'=> 'Email Kurir wajib diisi',
            'email.unique'=> 'Email yang diisi sudah ada di database',
            'password.required'=> 'Password wajib diisi',
            'password.unique'=> 'Password yang diisi sudah ada di database',

        ]);
        $data = [
           
            'name'=>$request->name,
            'email'=>$request->email,
            'passsord'=>$request->password,

        ];
        kurir::where('id',$id)->update($data);

        return redirect()->to('kurir')->with('success','Data sudah di update');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kurir::where('id',$id)->delete();
        return redirect()->to('kurir')->with('success','Berhasil delete data');
    }
}
