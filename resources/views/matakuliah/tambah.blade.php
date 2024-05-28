@extends('home.templade')

@section('tittle')
    Tambah Data
@endsection

@section('content')
    <form action="{{route('save.matakuliah')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Matakuliah</label>
            <input type="text" name="matakuliah" value="{{old('matakuliah')}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('matakuliah')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Ruangan</label>
            <input type="text" name="ruangan" value="{{old('ruangan')}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('ruangan')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Dosen Pengampu</label>
            <input type="text" name="dosen_pengampu" value="{{old('dosen_pengampu')}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('dosen_pengampu')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Foto</label>
            <input type="file" name="foto" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('foto')}}</span>
        </div>
        <div class="flex justify-end mt-5">
            <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
        </div>
    </form>
@endsection
