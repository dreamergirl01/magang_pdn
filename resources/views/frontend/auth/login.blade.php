{{-- <x-wrapper>
    <h1 class="text-4xl text-gray-400">hello world</h1>
</x-wrapper> --}}

@extends('frontend.auth.template')
@section('tittle')
    Login
@endsection
@section('content')
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <img src="/img/beams.jpg" alt="" class="absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2"
            width="1308" />
        <div
            class="absolute inset-0 bg-[url(/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]">
        </div>
        <div
            class="relative bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
            <div class="mx-auto max-w-md">
                <h3 class="text-center text-4xl font-serif">SISTEM LOGIN</h3>
                <div class="divide-y divide-gray-300/50">
                    <div class="space-y-6 py-8 text-base leading-7 text-gray-600">
                        <form action="{{ route('login') }}" method="post">
                            {{-- token untuk mengirimkan data --}}
                            @csrf
                            @if (session('pesan'))
                                <span class="w-full text-red-500 text-2xl">{{ session('pesan') }}</span>
                            @endif
                            <div class="mb-4">
                                <label for="" class="block text-sm font">email</label>
                                <input type="text" name="email" id=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg w-full p-2.5 white:bg-gray-700 dark:border-gray-600 dark:text-black"
                                    placeholder="username">
                            </div>
                            <div class="mb-4">
                                <label for="" class="block text-sm">password</label>
                                <input type="password" name="password" id=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg w-full p-2.5 white:bg-gray-700 dark:border-gray-600 dark:text-black"
                                    placeholder="password">
                            </div>
                    </div>
                    <div class="pt-0.5 text-base font-semibold leading-7">
                        <button class="bg-stone-300 rounded-md w-28 p-2 text-center mt-5 ">Login</button>
                        <a href="{{ route('daftar') }}"
                            class="bg-stone-300 rounded-md w-28 p-2.5 text-center mt-5 ml-5">Register</a>
                    </div>
                    {{-- <span>Belum Punya Akun? <a href="{{ route('daftar') }}">Daftar</a></span> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
