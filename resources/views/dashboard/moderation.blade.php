@extends('layouts.main')

@section('body')
    @include('partials.white-navbar')

    <div class="flex font-quicksand">
        <div class="w-[20%] pt-20 bg-neutral-100">
            @include('partials.sidebar-dashboard')
        </div>
        <div class="flex-1 pt-20 px-20">
            <img src="{{ asset('assets/dashboard.png') }}" alt="">
            <p class="font-bold text-2xl mt-10 mb-7">Setujui atau Tolak Postingan : 1</p>

            <div class="flex justify-start md:flex-row flex-col flex-wrap">
                <div class="bg-neutral-200 md:w-5/12 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-5">
                    <a href="/festfun-season-4" class="mb-5 inline-block">
                        <div class="flex mb-2 justify-between">
                            <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                        </div>
                        <img src="{{ asset('thumbnails/festfun.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                        <p class="font-bold text-xl mb-1">Pelaksanaan Festfun Season 4 di SMKN 46 Jakarta</p>
                        <p class="font-medium">Event</p>
                        <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                    </a>
                    <form action="">
                        <button type="submit" class="mr-1 text-white bg-neutral-800 px-3 py-0.5 font-semibold text-sm rounded-md">Setujui</button>
                        <a href="/" class="mr-1 text-neutral-800 border-2 border-neutral-800 px-3 py-0.5 font-semibold text-sm rounded-md">tolak</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection