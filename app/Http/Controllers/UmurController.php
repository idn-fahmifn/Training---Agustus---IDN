<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function showForm () {
        return view('umur.cek_umur');
    }

    public function cekProses(Request $request){

        // untuk mengecek validasi request atau data yang diambil
        $request->validate([
            'umur' => 'required|integer|min:1'
        ]);

        // menyimpan data sementara yang diambil dari form yang diinputkan user.
        $request->session()->put('umur', $request->umur);

        // kalau berhasil melewati middleware, maka akan diarahkan ke route home.
        return redirect('home');

    }
}
