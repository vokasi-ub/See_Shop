<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Illuminate\Support\Facades\DB;
class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_barangs = DB::table('kategori_barang')->get();
        return view('kategori_barang.index',['kategori_barangs'=>$kategori_barangs]);    
        
    }

    public function search(Request $request)
    {
        $search= $request->search;
        $kategori_barangs=Kategori::where('jenis_barang','like',"%".$search."%")->paginate(); 
       

        return view('kategori_barang.index',compact('kategori_barangs'));     
    } 

    public function pagination(Request $request)
    {
        $pagination= $request->pagination;
        $barangs=Barang::where('nama_barang','like',"%".$search."%")->pagination(); 
        $pagination->appends($request->only('keyword'));
        return view('kategori_barang.index',compact('barangs'));     
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_barang.create_kategori');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('kategori_barang')->insert([
            'id_kategori_barang' => $request->id,
            'nama_kategori' => $request->jenis_barang,
            'created_at' => $request ->created_at
            
        ]);
        // alihkan halaman ke halaman data barang
        return redirect('/kategori_barang')->with('message', 'Data Berhasil Di Tambahkan');
      

        
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
        $kategori_barangs = DB::table('kategori_barang')->where('id_kategori_barang',$id)->get();
        return view('/kategori_barang/edit_kategori',['kategori_barangs' => $kategori_barangs]);

        
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
        

        $kategori_barangs = Kategori::find($id);
        $kategori_barangs->jenis_barang = $request->get('jenis_barang');
        $kategori_barangs->created_at = $request->get('created_at');
        $kategori_barangs->updated_at = $request->get('updated_at');
        $kategori_barangs->save();
        return redirect('/kategori_barang')->with('message', 'Data Berhasil Di Tambahkan');   
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('kategori_barang')->where('id_kategori_barang',$id)->delete();
        return redirect('/kategori_barang')->with('message', 'Data berhasil dihapus!');
        
    }
}
