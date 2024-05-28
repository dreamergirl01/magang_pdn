@extends('home.templade')

@section('tittle')
    Halaman Matakuliah
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data Matakuliah</div>
        <div>
            <a href="{{route('tambah.matakuliah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3 bg-teal-400 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Matakuliah</th>
                <th class="border p-3">Ruangan</th>
                <th class="border p-3">Dosen Pengampu</th>
                <th class="border p-3">Foto</th>
                <th class="border p-3">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliah as $m => $n)
                <tr>
                    <td>{{ $m + 1 }}</td>
                    <td>{{ $n->matakuliah }}</td>
                    <td>{{ $n->ruangan }}</td>
                    <td>{{ $n->dosen_pengampu }}</td>
                    <td><img src="{{ asset('foto/' . $n->foto) }}" width="100" alt=""></td>
                    <td>
                        <div class="flex gap-3 justify-center">
                            <a href="{{route('edit.matakuliah', $n->id)}}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                            <a href="{{route('delete.matakuliah',$n->id)}}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection()
