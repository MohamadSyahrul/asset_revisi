<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Satuankerja;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function index(){
        // $items = User::all();
        // return view('pages.pengaturan.management.management_user', compact('items'));
        $items = User::with(['satuan_kerja'])->get();
        return view('pages.pengaturan.management.management_user',[
            'items'=>$items
        ]);
    }
    public function create(){
        // return view('pages.pengaturan.management.create');
        $satuanKerja = Satuankerja::all();
        return view('pages.pengaturan.management.create',[
            'satuanKerja' => $satuanKerja
        ]);
    }
    public function store(Request $request){

        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->get('password'));
        $user->roles = $request->roles;
        $user->satuan_kerja_id = $request->satuan_kerja_id;
        if ($request->hasFile('gambar')) {
            $nm = $request->gambar;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $user->gambar = $namaFile;
            $nm->move(public_path() . '/img', $namaFile);
        }else{
            $user->gambar = 'default.png';
        }
        $user->save();
        return redirect('pengaturan/management-user');

    }
    public function edit($id){
        $item = User::findorfail($id);
        $satuanKerja = Satuankerja::all();

        return view('pages.pengaturan.management.edit',[
            'item'=> $item,
            'satuanKerja' => $satuanKerja
        ]);
    }

    public function update(Request $request, $id)
    {

        $update = User::findorfail($id);

        $update->name = $request->name;
        $update->email = $request->email;
        $update->password = Hash::make($request->get('password'));
        $update->roles = $request->roles;
        $update->satuan_kerja_id = $request->satuan_kerja_id;

        $update->update();
        return redirect('pengaturan/management-user');
    }


    public function destroy($id)
    {
        $delete = User::findOrFail($id);

        $file = public_path('/img/').$delete->gambar;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka delete file diforder public/img
            @unlink($file);
        }
        //delete data didatabase
        $delete->delete();
        return back();
    }
}
