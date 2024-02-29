<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata extends Controller
{

    public function formulir(Request $request){
        $Nama=$request-> Nama;
        $Nim=$request-> Nim;
        $Prodi=$request->Prodi;
        $Jurusan=$request->Jurusan;

        return
            "Nama : ".$Nama ."\n"
            ."NIM : ".$Nim ."\n"
            ."Prodi : ".$Prodi ."\n"
            ."Jurusan : ".$Jurusan ."\n";




    }
}
