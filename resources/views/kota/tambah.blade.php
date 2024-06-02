@extends('home.templade')

@section('tittle')
    Tambah Data
@endsection

@section('content')
    <form action="{{route('save.kota')}}" method="post">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Nama Provinsi</label>
            <select name="id_provinsi" id="" class="p-2 border rounded-md">
                <option value="">--Pilih Nama Provinsi--</option>
                @foreach ($provinsi as $p)
                <option value="{{$p->id}}">{{$p->nama_provinsi}}</option>
                @endforeach
            </select>
            <span>{{$errors->first('nama_provinsi')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Nama Kota</label>
            <input type="text" name="nama_kota" value="{{old('nama_kota')}}" id="" class="p-2 border rounded-md" placeholder="nama kota">
            <span>{{$errors->first('nama_kota')}}</span>
        </div>
        <div class="flex justify-end mt-5">
            <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
        </div>
    </form>
@endsection
