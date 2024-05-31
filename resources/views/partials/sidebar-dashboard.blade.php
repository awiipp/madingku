<div class="">
    {{-- w-3/12 --}}
<p class="md:text-xl text-lg font-bold mb-3 text-neutral-500 pl-7">Konten</p>
<ul class="mb-10 font-semibold md:text-lg">
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10 {{ $title == 'Dashboard' ? 'border-l-4 border-neutral-800' : '' }}"><a href="/dashboard">Mading Saya</a></li>
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10"><a href="#">Menunggu</a></li>
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10"><a href="#">Buat Mading</a></li>
</ul>

<p class="md:text-xl text-lg font-bold mb-3 text-neutral-500 pl-7">Personalisasi</p>
<ul class="mb-10 font-semibold md:text-lg">
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10"><a href="#">Profil Saya</a></li>
</ul>

<p class="md:text-xl text-lg font-bold mb-3 text-neutral-500 pl-7">Admin</p>
<ul class="mb-10 font-semibold md:text-lg">
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10 {{ $title == 'Moderasi' ? 'border-l-4 border-neutral-800' : '' }}"><a href="/moderation">Moderasi</a></li>
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10"><a href="#">Mading</a></li>
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10"><a href="#">Kategori</a></li>
    <li class="hover:text-neutral-600 md:mb-4 mb-1 pl-10"><a href="#">Pengguna</a></li>
</ul>
</div>