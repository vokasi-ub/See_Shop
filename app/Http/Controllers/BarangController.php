<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = DB::table('barang')->get();
        return view('data_barang.index',['barangs'=>$barangs]);    
        
    }

    public function search(Request $request)
    {
        $search= $request->search;
        $barangs=Barang::where('nama_barang','like',"%".$search."%")->paginate(); 
       

        return view('data_barang.index',compact('barangs'));     
    } 

    public function pagination(Request $request)
    {
        $pagination= $request->pagination;
        $barangs=Barang::where('nama_barang','like',"%".$search."%")->pagination(); 
       
        $pagination->appends($request->only('keyword'));
        return view('data_barang.index',compact('barangs'));     
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_barang/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $simpan= new \App\Barang;
      $simpan->id_barang=$request->id_barang;
      $simpan->nama_barang=$request->nama_barang;
      $simpan->harga=$request->harga;
      $simpan->created_at=$request->created_at;
     
      
     
      $gambar=$request->file('gambar');

      $nama=rand().'.'.$gambar->getClientOriginalExtension();

      $gambar->move(public_path('images'),$nama);

      $simpan->gambar = $nama;
      $simpan->save();

        
        // alihkan halaman ke halaman pegawai
        return redirect('/data_barang')->with('message', 'Data Berhasil Di Tambahkan');
      

        
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
        $barangs = DB::table('barang')->where('id_barang',$id)->get();
        return view('/data_barang/edit',['barangs' => $barangs]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        /*DB::table('categories')->where('category_id',$request->id)->update([
            'category_id'=> $request->category_name,
            'category_name' => $request->category_name,
            'remarks' => $request->remarks,
            'tglInput'=> $request->tglInput
        ]);*/

        $barangs = Barang::find($id);
        $barangs->nama_barang = $request->get('nama_barang');
        $barangs->gambar = $request->get('gambar');
        $barangs->harga = $request->get('harga');
        $barangs->created_at = $request->get('created_at');
        $barangs->updated_at = $request->get('updated_at');
        $barangs->save();
        return redirect('/data_barang')->with('message', 'Data Berhasil Di Tambahkan');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('barang')->where('id_barang',$id)->delete();
        return redirect('/data_barang')->with('message', 'Data berhasil dihapus!');
        
    }
}
