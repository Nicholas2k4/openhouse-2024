@extends('admin.layouts.layout')
@section('content')
<div class="h-full justify-center px-4">
    <h1 class="text-3xl font-bold py-4">List Pendaftar & Validasi</h1>
    <div class="flex p-2">
        <select name="" id="" class="border-2 border-gray-200 rounded">
            <option value="">All</option>
            <option value="">Chinese Art</option>
            <option value="">ASFS</option>
            <option value="">Dance</option>
            <option value="">Dekorasi</option>
            <option value="">Ilustrasi</option>
            <option value="">Martografi</option>
            <option value="">Modeling</option>
            <option value="">Teater</option>
            <option value="">Vocal Group</option>
            <option value="">English Debate</option>
            <option value="">Pengembangan Diri</option>
            <option value="">Esport</option>
            <option value="">Badminton</option>
            <option value="">Basket</option>
            <option value="">Catur</option>
            <option value="">Futsal</option>
            <option value="">Renang</option>
            <option value="">Taekwondo</option>
            <option value="">Tenis Lapangan</option>
            <option value="">Tenis Meja</option>
            <option value="">Voli</option>
            <option value="">Matrapenza</option>
            <option value="">EMR</option>
            <option value="">Menwa</option>
            <option value="">Matrapala</option>
            <option value="">Paduan Suara</option>
            <option value="">Orkestra</option>
        </select>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center ms-4" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
        </svg>
        <input type="search" name="" id="searchReg" class="ms-1 border-2 border-gray-200 rounded p-0.5" placeholder="NRP">
    </div>
    <div id="regTable" class="overflow-auto rounded-lg bg-white drop-shadow-lg">
        <table class="w-full">
            <thead class="bg-gray-200 border-b-2 border-gray-200">
                <tr class="text-left text-nowrap">
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">NRP & Nama</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">UKM</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">File</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Code Transfer</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Seleksi</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Payment</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200"></th>
                </tr>
            </thead>
            <tbody id="result">

            </tbody>
        </table>
    </div>
</div>
@endsection