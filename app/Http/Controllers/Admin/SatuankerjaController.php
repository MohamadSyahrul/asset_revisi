<?php

namespace App\Http\Controllers\Admin;

use App\Satuankerja;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SatuankerjaRequest;

class SatuankerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Satuankerja::all();
        return view('pages.pengaturan.satuan.index',[
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
        return view('pages.pengaturan.satuan.satuan-kerja');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SatuankerjaRequest $request)
    {
        $data = $request->all();
        $data['kode_satuan'] = generateKodePustaka($request->nama_satuan);
        $data['slug'] = Str::slug($request->nama_satuan);

        Satuankerja::create($data);
        return redirect()->route('satuan-kerja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function show(Satuankerja $satuankerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Satuankerja::findOrFail($id);

        return view('pages.pengaturan.satuan.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function update(SatuankerjaRequest $request, $id)
    {
        $data = $request->all();
        $data['kode_satuan'] = generateKodePustaka($request->nama_satuan);
        $data['slug'] = Str::slug($request->nama_satuan);

        $item = Satuankerja::findOrFail($id);

        $item->update($data);

        return redirect()->route('satuan-kerja.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satuankerja  $satuankerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Satuankerja::findOrFail($id);
        $item->delete();
        return redirect()->route('satuan-kerja.index');
    }
}
