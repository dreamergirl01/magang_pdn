@extends('home.templade')

@section('tittle')
    Home
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data User</div>
        <div>
            <a href="{{ route('tambah') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah
                Data</a>
            <a href="{{ route('logout') }}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Logout</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3 bg-teal-400 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Nama</th>
                <th class="border p-3">Email</th>
                <th class="border p-3">Telpon</th>
                <th class="border p-3">Foto</th>
                <th class="border p-3">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $i => $a)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->email }}</td>
                    <td>{{ $a->telpon }}</td>
                    <td><img src="{{ asset('foto/' . $a->foto) }}" width="100" alt=""></td>
                    <td>
                        <div class="flex gap-3 justify-center">
                            <a href="{{route('edit', $a->id)}}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                            <a href="{{route('delete',$a->id)}}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection()
