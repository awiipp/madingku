@extends('main.main')

@section('body')
    @include('partials.white-navbar')

    <div class="pt-28 font-quicksand md:mx-16 mx-7 mb-28">
        <h1 class="font-bold text-3xl mb-10">Mading Penting</h1>

        <div class="flex justify-start md:flex-row flex-col flex-wrap">
            <div class="bg-neutral-200 md:w-96 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-2">
                <a href="/festfun-season-4">
                    <div class="flex mb-2 justify-between">
                        <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                        <p class="mr-1 text-white bg-neutral-800 px-3 py-0.5 font-semibold text-sm rounded-md">Penting</p>
                    </div>
                    <img src="{{ asset('thumbnails/festfun.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                    <p class="font-bold text-xl mb-1">Pelaksanaan Festfun Season 4 di SMKN 46 Jakarta</p>
                    <p class="font-medium">Event</p>
                    <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                </a>
            </div>

            <div class="bg-neutral-200 md:w-96 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-2">
                <a href="/bulan-bahasa">
                    <div class="flex mb-2 justify-between">
                        <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                        <p class="mr-1 text-white bg-neutral-800 px-3 py-0.5 font-semibold text-sm rounded-md">Penting</p>
                    </div>
                    <img src="{{ asset('thumbnails/bulbas.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                    <p class="font-bold text-xl mb-1">Event Bulan Bahasa di SMKN 46 Jakarta</p>
                    <p class="font-medium">Event</p>
                    <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                </a>
            </div>

            <div class="bg-neutral-200 md:w-96 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-2">
                <a href="/job-and-fair">
                    <div class="flex mb-2 justify-between">
                        <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                        <p class="mr-1 text-white bg-neutral-800 px-3 py-0.5 font-semibold text-sm rounded-md">Penting</p>
                    </div>
                    <img src="{{ asset('thumbnails/jobfair.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                    <p class="font-bold text-xl mb-1">Job & Education Fair: Optimis Perjuangan - SMKN 46 Jakarta</p>
                    <p class="font-medium">Event</p>
                    <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                </a>
            </div>
        </div>
    </div>

    <div class="flex font-quicksand md:mx-20 mx-4 mb-20">
        <div class="w-3/12">
            @include('partials.sidebar-board')
        </div>
        <div class="flex-1 ml-10">
            <h1 class="font-bold text-3xl ml-5 mb-5">Terbaru</h1>
            <div class="flex justify-start md:flex-row flex-col flex-wrap">
                <div class="bg-neutral-200 md:w-5/12 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-5">
                    <a href="/festfun-season-4">
                        <div class="flex mb-2 justify-between">
                            <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                        </div>
                        <img src="{{ asset('thumbnails/festfun.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                        <p class="font-bold text-xl mb-1">Pelaksanaan Festfun Season 4 di SMKN 46 Jakarta</p>
                        <p class="font-medium">Event</p>
                        <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                    </a>
                </div>

                <div class="bg-neutral-200 md:w-5/12 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-5">
                    <a href="/bulan-bahasa">
                        <div class="flex mb-2 justify-between">
                            <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                            <p class="mr-1 text-white bg-neutral-800 px-3 py-0.5 font-semibold text-sm rounded-md">Penting</p>
                        </div>
                        <img src="{{ asset('thumbnails/bulbas.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                        <p class="font-bold text-xl mb-1">Event Bulan Bahasa di SMKN 46 Jakarta</p>
                        <p class="font-medium">Event</p>
                        <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                    </a>
                </div>

                <div class="bg-neutral-200 md:w-5/12 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-5">
                    <a href="/job-and-fair">
                        <div class="flex mb-2 justify-between">
                            <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                            <p class="mr-1 text-white bg-neutral-800 px-3 py-0.5 font-semibold text-sm rounded-md">Penting</p>
                        </div>
                        <img src="{{ asset('thumbnails/jobfair.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                        <p class="font-bold text-xl mb-1">Job & Education Fair: Optimis Perjuangan - SMKN 46 Jakarta</p>
                        <p class="font-medium">Event</p>
                        <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                    </a>
                </div>

                <div class="bg-neutral-200 md:w-5/12 px-3 py-3 rounded-lg hover:bg-neutral-300 md:mb-8 mb-6 md:mx-5">
                    <a href="/festfun-season-4">
                        <div class="flex mb-2 justify-between">
                            <span class="flex"><i data-feather="user" class="w-5 ml-1"></i><p class="font-semibold ml-2">Kang Hyewon</p></span>
                        </div>
                        <img src="{{ asset('thumbnails/festfun.jpg') }}" alt="" class="rounded-lg w-full mb-3">
                        <p class="font-bold text-xl mb-1">Pelaksanaan Festfun Season 4 di SMKN 46 Jakarta</p>
                        <p class="font-medium">Event</p>
                        <p class="font-medium">Diunggah pada 11 Desember 2023</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection