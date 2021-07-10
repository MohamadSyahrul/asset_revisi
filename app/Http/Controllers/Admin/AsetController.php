<?php

namespace App\Http\Controllers\Admin;

use App\Aset;
use App\Lokasi;
use App\FotoAset;
use App\Kategori;
use App\Satuankerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\AsetImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Aset::all();
        return view('pages.data-asset.data-detail',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = Kategori::all();
        $data_lokasi = Lokasi::all();
        $data_satker = Satuankerja::all();
        return view('pages.data-asset.entri-data',compact('data_kategori','data_lokasi','data_satker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_asset' => 'required',
            'jenis_asset' => 'required',
            'kategori' => 'required',
            'keadaan_asset' => 'required',
            'tanggal_terima' => 'required',
            'batas_pemakaian' => 'required',
            'kuantitas' => 'required',
            'lokasi_asset' => 'required',
            'nilai_asset' => 'required',
            'merk_aset' => 'required',
            'koordinat_asset' => 'required',
            'keterangan' => 'required',
            'foto_utama' => 'image|nullable|max:1999',
            'foto_1' => 'image|nullable|max:1999',
            'foto_2' => 'image|nullable|max:1999',
        ]);

        /** Insert Database */
        $asset = $request->all();

        $foto_utama = storeGambar($request->file('foto_utama'));
        $foto_1 = storeGambar($request->file('foto_1'));
        $foto_2 = storeGambar($request->file('foto_2'));

        $asset['kode_asset'] = generateKode($request->tanggal_terima,$request->kode_satuan,$request->nama_asset);
        $asset['tanggal_terima'] = dateFormat($request->tanggal_terima);
        $asset['deleted_at'] = NULL;
        $asset['keadaan_awal'] = $request->keadaan_asset;
        $asset['quantity'] = $request->kuantitas;

        $asset['total'] = $asset['quantity'] * $asset['nilai_asset'];

        FotoAset::create([
            'kode_asset' => $asset['kode_asset'],
            'foto_utama' => $foto_utama,
            'foto_1' => $foto_1,
            'foto_2' => $foto_2,
        ]);
        Aset::create($asset);

        return redirect()
            ->route('data-asset.index')
            ->with('sukses','Data Aset Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Ambil data sesuai id
        $aset = Aset::find($id);

        // generate QrCode
        $qrCode = generateQrKode($aset['kode_asset'], $aset['nama_asset']);

        // Penyusutan
        $penyusutan = penyusutanAset($aset['tanggal_terima']);

        $penyebut = 100 / $aset['batas_pemakaian'];

        $persentase = $aset['keterangan'] - ($penyusutan==0 ? 0 : $penyebut);

        $aset->update(['keterangan' => $persentase,]);

        $objAset = Aset::where('id', $id)->get();
        $kategori = Kategori::find($aset->kategori);
        $lokasi = Lokasi::find($aset->lokasi_asset);
        $foto = FotoAset::where('kode_asset', $aset->kode_asset)->get();
        return view('pages.data-asset.detail-aset',[
            'aset' => $objAset,
            'kategori' => $kategori['nama_kategori'],
            'lokasi' => $lokasi['nama_lokasi'],
            'qrCode' => $qrCode,
            'penyusutan' => $penyusutan,
            'persentase' => $persentase,
            'foto' => $foto,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Aset::findOrFail($id);
        $data_kategori = Kategori::all();
        // dd($data_kategori[0]->kode_kategori);
        $data_lokasi = Lokasi::all();
        $data_satker = Satuankerja::all();
        // $foto = FotoAset::where('kode_asset',$asset->kode_asset)->first();

        // dd($foto);

        return view('pages.data-asset.edit-data',[
            'asset' => $asset,
            'kategori' => $data_kategori,
            'lokasi' => $data_lokasi,
            'satker' => $data_satker,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_asset' => 'required',
            'jenis_asset' => 'required',
            'kategori' => 'required',
            'keadaan_awal' => 'required',
            'batas_pemakaian' => 'required',
            'lokasi_asset' => 'required',
            'nilai_asset' => 'required',
            'quantity' => 'required',
            'merk_aset' => 'required',
            'koordinat_asset' => 'required',
            'keterangan' => 'required',
        ]);

        $asset = Aset::find($id);

        $attr = $request->all();

        $asset->update($attr);

        return redirect(route('data-asset.index'))->with('sukses','Data Aset Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asset = Aset::find($id);
        $foto = FotoAset::where('kode_asset', $asset->kode_asset);

        // dd($foto);

        $asset->delete();
        $foto->delete();
        return redirect(route('data-asset.index'))->with('hapus','Data Aset Berhasil dihapus');
    }

    public function import(Request $request){
        Excel::import(new AsetImport, $request->file('excel'));
        
        return redirect()->back();
        // $this->validate($request, [
        //     'excel' => 'required|mimes:csv,xls,xlsx'
        //     // 'excel' => 'required|mimes:csv'
        // ]);
        // $file = $request->file('excel');
        // dump($file);
        // $namaFile = date('Y-M-d').$file->getClientOriginalName();
        
        // if (file_exists(public_path('data_aset/'.$namaFile))) {
        
        // return redirect()->back();
          
        // }
        // else{
        // $file->move('data_aset',$namaFile);

        //  Excel::import(new AsetImport, public_path('data_aset/'.$namaFile));
         
        // return redirect()->back();
        // }
    }
}
