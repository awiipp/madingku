@extends('main.main')

@section('body')
    @include('partials.white-navbar')

    <div class="flex font-quicksand">
        <div class="w-3/12 pt-36 pl-10 bg-neutral-100 hidden md:block">
            @include('partials.sidebar-board')
        </div>
        <div class="flex-1 md:px-28 px-10 md:pt-36 pt-24 mb-36">
            <p class="mr-1 text-white bg-neutral-800 px-3 py-0.5 font-semibold text-base rounded-md inline-block mb-3">Penting</p>
            <h1 class="font-bold text-4xl mb-3">Pelaksanaan Festfun Season 4 di SMKN 46 Jakarta</h1>
            <div class="flex justify-between font-semibold mb-8">
                <p>Oleh Kang Hyewon | Event</p>
                <p>11 Des 2023</p>
            </div>
            <img src="{{ asset('thumbnails/festfun.jpg') }}" alt="" class="rounded-lg w-full mb-5">
            <div class="font-medium text-lg">
                <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus excepturi ab autem dolorum error minima culpa quos accusamus! Porro quisquam perferendis eaque fugit, iste vitae doloribus quae. Sunt, repudiandae nesciunt vero fuga quidem doloribus quos suscipit tempora dignissimos. Quas labore molestiae praesentium asperiores iure quos soluta non architecto repudiandae provident iusto tempore. Sequi dolorem vel debitis ex expedita eius tenetur.</p>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum a repudiandae laborum aliquid recusandae omnis animi fugit ut molestias, soluta excepturi velit assumenda dolorum aspernatur nemo unde deserunt ab eligendi quia voluptatum eius fugiat. Pariatur, officia labore! Perferendis blanditiis, porro suscipit eveniet, officia eos voluptate, facere possimus voluptatibus quia fugiat nobis dignissimos sapiente in.</p>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente accusamus est veritatis delectus. Necessitatibus, id ad. Repellat suscipit provident eaque laudantium corrupti beatae assumenda neque aperiam animi eveniet ipsum debitis molestiae veritatis obcaecati nulla quasi, cum illo magni. Sunt, ducimus culpa, recusandae cupiditate praesentium ipsa, nisi quo soluta magnam voluptate veniam. Amet sapiente fugit eos ipsa sequi magni voluptatibus expedita!</p>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection