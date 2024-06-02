@extends('home.templade')

@section('tittle')
    Kota
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data Kota</div>
        <div>
            <a href="{{route('tambah.kota')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah
                Data</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3 bg-teal-400 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Nama Provinsi</th>
                <th class="border p-3">Nama Kota</th>
                <th class="border p-3">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kota as $k => $l)
                <tr>
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $l->nama_provinsi }}</td>
                    <td>{{ $l->nama_kota }}</td>
                    <td>
                        <div class="flex gap-3 justify-center">
                            <a href="" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                            <a href="" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection()
