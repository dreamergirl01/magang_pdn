@extends('home.templade')

@section('tittle')
    Edit Data
@endsection

@section('content')
    <form action="{{route('update.matakuliah',$matakuliah->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Matakuliah</label>
            <input type="text" name="matakuliah" value="{{$matakuliah->matakuliah}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('matakuliah')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Ruangan</label>
            <input type="text" name="ruangan" value="{{$matakuliah->ruangan}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('email')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Dosen Pengampu</label>
            <input type="text" name="dosen_pengampu" value="{{$matakuliah->dosen_pengampu}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('telpon')}}</span>
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
