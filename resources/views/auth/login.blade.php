@extends('main.main')

@section('body')
    @include('partials.navbar')

    <div class="flex flex-col md:flex-row min-h-screen font-quicksand px-16">
        <div class="flex flex-col flex-1 items-center justify-center md:mt-0 mt-10">
            <h1 class="text-3xl font-bold mb-7">Selamat Datang!</h1>
            <div class="w-full md:w-8/12 mx-auto">
                {{-- error --}}
                <p class="text-sm font-semibold text-red-500 hidden">Gagal masuk! Pastikan username atau password benar.</p>
                <form action="">
                    <label for="username" class="block font-bold text-xl">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username kamu" class="w-full border-none focus:outline-none">
                    <div class="w-full h-0.5 bg-neutral-900 mb-6 mt-1"></div>

                    <label for="password" class="block font-bold text-xl">Kata sandi</label>
                    <input type="password" id="password" name="password" placeholder="Kata sandi kamu" class="w-full border-none focus:outline-none">
                    <div class="w-full h-0.5 bg-neutral-900 mb-2 mt-1"></div>

                    <p class="text-base font-semibold mb-4">belum punya akun? Buat akun <a href="/register" class="font-bold hover:underline">di sini.</a></p>

                    <button type="submit" class="bg-neutral-300 px-3 py-1 font-bold rounded-md hover:bg-neutral-400">Masuk</button>

                    <a href="/" class="bg-neutral-300 hover:bg-neutral-400 px-3 py-1 font-bold rounded-md md:hidden">Batal</a>
                </form>
            </div>
        </div>
        <div class="flex-1 hidden md:flex justify-center items-center">
            <img src="{{ asset('assets/authentication.jpeg') }}" alt="" class="w-[500px]">
        </div>
    </div>

    @include('partials.footer')
@endsection