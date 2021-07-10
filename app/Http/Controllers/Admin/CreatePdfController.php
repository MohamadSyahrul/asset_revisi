<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Aset;
use App\Lokasi;
use App\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreatePdfController extends Controller
{
    public function pdfForm(){
        $aset = Aset::all();
        $lokasi = Lokasi::all();
        $data_kategori = Kategori::all();
        $qrcode = base64_encode(generateQrKode($aset[0]->kode_asset, $aset[0]->nama_asset));
                $data = ['aset' => $aset,
                        'lokasi' =>$lokasi,
                        'data_kategori'=>$data_kategori,
                        'qrcode'=>$qrcode];

                $pdf = PDF::loadView('pages.pdf.pdf_view',$data)->setPaper('A4','landscape');
                return $pdf->stream('Simaset.pdf');
    }
    public function detail($id){
        // Ambil data sesuai id
        $aset = Aset::find($id);

        // generate QrCode
        $qrCode = base64_encode(generateQrKode($aset['kode_asset'], $aset['nama_asset']));

        // Penyusutan
        $penyusutan = penyusutanAset($aset['tanggal_terima']);

        $penyebut = 100 / $aset['batas_pemakaian'];

        $persentase = $aset['keterangan'] - ($penyusutan==0 ? 0 : $penyebut);

        $aset->update(['keterangan' => $persentase,]);

        $objAset = Aset::where('id', $id)->get();
        $kategori = Kategori::find($aset->kategori);
        $lokasi = Lokasi::find($aset->lokasi_asset);
        
        $data = ['aset' => $objAset,
                'kategori' => $kategori['nama_kategori'],
                'lokasi' => $lokasi['nama_lokasi'],
                'qrCode' => $qrCode,
                'penyusutan' => $penyusutan,
                'persentase' => $persentase,
                ];
        
        $pdf = PDF::loadView('pages.pdf.detail',$data)->setPaper('A4','landscape');
        return $pdf->stream('Simaset-detail.pdf');
        // return view('pages.data-asset.detail-aset',[
        //     'aset' => $objAset,
        //     'kategori' => $kategori['nama_kategori'],
        //     'lokasi' => $lokasi['nama_lokasi'],
        //     'qrCode' => $qrCode,
        //     'penyusutan' => $penyusutan,
        //     'persentase' => $persentase,
        //     'foto' => $foto,
        // ]);
    }
    public function qrCode(){
        $aset = Aset::all();
        $qrcode = base64_encode(generateQrKode($aset[0]->kode_asset, $aset[0]->nama_asset));
                $data = ['aset' => $aset,'qrcode'=>$qrcode];

                $pdf = PDF::loadView('pages.pdf.qrcode',$data)->setPaper('A4','landscape');
                return $pdf->stream('Simaset-qrcode.pdf');
    }
}
