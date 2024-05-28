@extends('home.templade')

@section('tittle')
    Edit Data
@endsection

@section('content')
    <form action="{{route('update',$pengguna->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Nama</label>
            <input type="text" name="nama" value="{{$pengguna->nama}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('nama')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Email</label>
            <input type="email" name="email" value="{{$pengguna->email}}" id="" class="p-2 border rounded-md">
            <span>{{$errors->first('email')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Telpon</label>
            <input type="text" name="telpon" value="{{$pengguna->telpon}}" id="" class="p-2 border rounded-md">
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
