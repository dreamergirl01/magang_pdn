<?php

namespace App\Http\Controllers\Matakuliah;

use App\Http\Controllers\Controller;
use App\Http\Requests\MatakuliahRequest;
use App\Http\Requests\UpdateMatakuliahRequest;
use App\Models\matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MatakuliahController extends Controller
{
    public function index(){
        $data['matakuliah'] = matakuliah::get();
        return view('matakuliah.index',$data);
    }

    public function tambah(){
        return view('matakuliah.tambah');
    }

    public function save(MatakuliahRequest $r){
        if($r->validated()){
            $foto = $r->foto->getClientOriginalName();
           $r->foto->move('foto/',$foto);

            matakuliah::create([
                'matakuliah'=> $r->matakuliah,
                'ruangan'=> $r->ruangan,
                'dosen_pengampu' => $r->dosen_pengampu,
                'foto' => $foto
            ]);

            return redirect()->route('matakuliah');
        }
    }

    public function edit($id){
        $data['matakuliah'] = matakuliah::where('id',$id)->first();
        return view('matakuliah.edit',$data);
    }

    public function update(UpdateMatakuliahRequest $r, $id){
        if($r->validated()){
            if($r->foto){
                //cek nama file sebelumnya
                $cek = matakuliah::where('id',$id)->first();
                //jika file sebelumnya ada maka jalankan perintah hapus
                if(File::exists(public_path('foto/'.$cek->foto))){
                    File::delete(public_path('foto/'.$cek->foto));
                }

                $foto = $r->foto->getClientOriginalName();
                //pindahkan file gambar ke dalam direktori public/foto
                $r->foto->move('foto/',$foto);

                $data['foto'] =$foto;
            }

            $data['matakuliah'] = $r->matakuliah;
            $data['ruangan'] = $r->ruangan;
            $data['dosen_pengampu'] = $r->dosen_pengampu;

            matakuliah::where('id',$id)->update($data);

            return redirect('matakuliah');
        }
    }

    public function delete($id){
        matakuliah::where('id',$id)->delete();

        return back();
    }
}
