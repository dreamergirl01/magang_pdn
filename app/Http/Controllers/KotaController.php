<?php

namespace App\Http\Controllers;

use App\Http\Requests\KotaRequest;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    public function index(){
        $data['kota'] = Kota::leftJoin('provinsi','provinsi.id','=','kota.id_provinsi')->get();
        return view('kota.index',$data);
    }
    //tambah data
    public function tambah(){
        $data['provinsi'] = Provinsi::get();

        return view('kota.tambah',$data);
    }

    public function save(KotaRequest $r){
        if($r->validated()){
            Kota::create([
                'id_provinsi' => $r->id_provinsi,
                'nama_kota' => $r->nama_kota
            ]);
            return redirect('/kota')->with('pesan','input data berhasil');
        }
    }
}
