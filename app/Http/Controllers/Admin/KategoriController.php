<?php

namespace App\Http\Controllers\Admin;

use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Kategori::all();
        return view('pages.pustaka.kategori.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pustaka.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriRequest $request)
    {
        $items = new kategori([
            'kode_kategori' => generateKodePustaka($request->get('nama_kategori')),
            'nama_kategori' => $request->get('nama_kategori'),
        ]);
        $items->save();
        return redirect()->route('pustaka-kategori-aset.index');
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
        $item = Kategori::findOrFail($id);
        return view('pages.pustaka.kategori.edit',compact('item'));
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
        $item = Kategori::find($id);
        $item['kode_kategori'] = generateKodePustaka($request->nama_kategori);
        $item->nama_kategori = $request->get('nama_kategori');

        $item->save();
        return redirect()->route('pustaka-kategori-aset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Kategori::findOrFail($id);
        $item->delete();
        return redirect()->route('pustaka-kategori-aset.index');
    }
}
