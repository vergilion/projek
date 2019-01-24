<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ProdukModel;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProdukModel::all();
        return view('backend.produk.indexProduk',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.produk.createProduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama'=>'required',
        //     'email'=> 'required',
        //     'alamat' => 'required'
        // ]);

        $data = new ProdukModel([
            'p_id' => $request->get('kode'),
            'p_nama' => $request->get('nama'),
            'p_deskripsi' => $request->get('deskripsi'),
            'p_harga' => $request->get('harga'),
            'p_stok' => $request->get('stok')
        ]);
      //print_r($data);
      $data->save();
      return redirect('/produk')->with('success', 'Data Berhasil Ditambah');
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
        $data = ProdukModel::find($id);
        //print_r($data);
        return view('backend.produk.editProduk',compact('data'));
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
        // $request->validate([
        //     'nama'=>'required',
        //     'email'=> 'required',
        //     'telp'=> 'required',
        //     'alamat' => 'required'
        // ]);

        
        $data = ProdukModel::find($id);
        $data->p_nama = $request->get('nama');
        $data->p_deskripsi = $request->get('deskripsi');
        $data->p_harga = $request->get('harga');
        $data->p_stok = $request->get('stok');
        $data->save();
        return redirect('/produk')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =ProdukModel::find($id);
        $data->delete();
        return redirect('/produk')->with('success', 'Data Berhasil Dihapus');
    }
}
