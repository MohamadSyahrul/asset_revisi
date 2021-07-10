<?php

namespace App\Http\Controllers\Admin;

use App\Lokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LokasiRequest;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Lokasi::all();
        return view('pages.pustaka.lokasi.index',[
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pustaka.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LokasiRequest $request)
    {
        $items = new Lokasi([
            'nama_lokasi' => $request->get('nama_lokasi'),
            'penanggung_jawab' => $request->get('penanggung_jawab'),
        ]);
        $items->save();
        return redirect()->route('pustaka-lokasi-aset.index');
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
        $item = Lokasi::findOrFail($id);
        return view('pages.pustaka.lokasi.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LokasiRequest $request, $id)
    {
        $item = Lokasi::find($id);
        $item->nama_lokasi = $request->get('nama_lokasi');
        $item->penanggung_jawab = $request->get('penanggung_jawab');

        $item->save();
        return redirect()->route('pustaka-lokasi-aset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Lokasi::findOrFail($id);
        $item->delete();
        return redirect()->route('pustaka-lokasi-aset.index');
    }
}
