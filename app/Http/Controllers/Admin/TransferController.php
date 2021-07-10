<?php

namespace App\Http\Controllers\Admin;

use App\Aset;
use App\Satuankerja;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransferController extends Controller
{
    public function index($id){
        $asset = Aset::findOrFail($id);
        $data_satker = Satuankerja::all();

        return view('pages.transfer.index',[
            'asset' => $asset,
            'satker' => $data_satker,
        ]);
    }
    public function store(Request $request, $id){
        $asset = Aset::findorfail($id);
        $request->validate([
            'kode_satuan' => 'required|not_in:0',
            'nama_asset' => 'nullable',
            'tanggal_terima' => 'nullable',
        ]);
        $asset['kode_asset'] = generateKode($asset->tanggal_terima,
                                            $request->kode_satuan,
                                            $asset->nama_asset);

        $asset->update();
        return redirect('admin/data-asset');
    }
}
