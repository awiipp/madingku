@extends('layouts.main')

@section('body')
    @include('partials.navbar')

    <div class="flex font-quicksand px-20 md:pt-32 pt-24 flex-col md:flex-row" id="home">
        <div class="flex-1 flex items-center justify-center flex-col pb-12 md:pb-0">
            <p class="font-bold md:text-4xl text-2xl md:-mt-32">Welcome to <span class="font-platypi">MadingKu</span><br>Cari tahu informasi baru hari ini.</p>
            <a href="/board" class="bg-neutral-300 text-neutral-900 self-start md:ml-5 text-xl font-bold px-3 py-1 rounded-md mt-3 hover:bg-neutral-400">Lihat mading</a>
        </div>
        <div class="flex-1 flex items-center justify-center mb-16">
            <img src="{{ asset('assets/main.jpeg') }}" alt="" class="-mr-7 md:mr-0 md:w-[290px] w-[220px]">
        </div>
    </div>

    <div class="flex font-quicksand px-10 md:pt-52 pt-36 pb-60 flex-col md:flex-row" id="about">
        <div class="flex-1 flex items-center justify-center">
            <img src="{{ asset('assets/madingku-1.png') }}" alt="" class="-mr-5 md:mr-0 mb-10 md:w-[400px] w-[330px]">
        </div>
        <div class="flex-1 flex justify-center flex-col">
            <p class="font-bold md:text-4xl text-2xl">Temukan informasi.</p>
            <p class="font-medium md:text-2xl text-lg">MadingKu adalah sebuah website dimana kamu bisa menemukan informasi seputar kegiatan, ekskul, event, dan hal lain yang ada di sini.</p>
        </div>
    </div>

    @include('partials.footer')
@endsection