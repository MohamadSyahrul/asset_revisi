<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function profile(){
        return view('profile');
    }

    public function reset(){
        return view('reset');
    }

    public function update_gambar(){
        return view('update_gambar');

    }
    public function edit_gambar(Request $request,$id){
        $user = User::findorfail($id);
        if ($request->hasFile('gambar')) {
            $nm = $request->gambar;
            $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
            $user->gambar = $namaFile;
            $nm->move(public_path() . '/img', $namaFile);
            $user->update();
        }else{
            $user->gambar = $user->gambar;
        }

        return redirect('/profile')
        ->with('sukses','Foto Profil Berhasil diupdate');;
    }
}
