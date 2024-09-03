@extends('admin.layouts.layout')
@section('content')
    <div class="h-full justify-center px-4">
        <h1 class="text-3xl font-bold py-4">List Pendaftar & Validasi</h1>
        <div class="w-full">
            <a href="{{ route('admin.exportData') }}" target="_blank" class="contents">
                <button class="w-full bg-green-500 p-2 rounded-xl font-medium text-xl text-white">Export Excel</button>
            </a>
        </div>
        <div class="flex flex-col lg:flex-row p-2">
            <label for="regFilter" class="self-start lg:self-center me-2">UKM</label>
            <select name="" id="regFilter" class="border-2 border-gray-200 rounded mb-2 lg:mb-0">
                <option value="">All</option>
                <option value="chinese">Chinese Art</option>
                <option value="asfs">ASFS</option>
                <option value="dance">Dance</option>
                <option value="dekor">Dekorasi</option>
                <option value="ilustrasi">Ilustrasi</option>
                <option value="martografi">Martografi</option>
                <option value="modeling">Modeling</option>
                <option value="teater">Teater</option>
                <option value="vg">Vocal Group</option>
                <option value="debate">English Debate</option>
                <option value="pd">Pengembangan Diri</option>
                <option value="esport">Esport</option>
                <option value="badmin">Badminton</option>
                <option value="basket">Basket</option>
                <option value="catur">Catur</option>
                <option value="futsal">Futsal</option>
                <option value="renang">Renang</option>
                <option value="taekwondo">Taekwondo</option>
                <option value="tenis-lapangan">Tenis Lapangan</option>
                <option value="tenis-meja">Tenis Meja</option>
                <option value="voli">Voli</option>
                <option value="mpz">Matrapenza</option>
                <option value="emr">EMR</option>
                <option value="menwa">Menwa</option>
                <option value="matrapala">Matrapala</option>
                <option value="padus">Paduan Suara</option>
                <option value="orkestra">Orkestra</option>
            </select>
            <label for="statusFilter" class="self-start lg:self-center lg:ms-4 me-2">Status</label>
            <select name="" id="statusFilter" class="border-2 border-gray-200 rounded mb-2 lg:mb-0">
                <option value="">All</option>
                <option value="pending">Pending</option>
                <option value="accepted">Accepted</option>
                <option value="rejected">Rejected</option>
            </select>
            <label for="searchReg" class="self-start lg:hidden">Search</label>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="self-center ms-4 hidden lg:block" viewBox="0 0 16 16">
                <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
            <input type="search" name="" id="searchReg" class="lg:ms-1 border-2 border-gray-200 rounded p-0.5"
                placeholder="NRP">
            <p id="dataCount" class="mt-4 lg:mt-0 my-2 lg:my-0 lg:self-center lg:ms-4 w-full text-end font-bold"></p>
        </div>
        <div class="pb-10">
            <div id="regTable" class="overflow-auto rounded-lg bg-white drop-shadow-lg">
                <table class="w-full">
                    <thead class="bg-gray-200 border-b-2 border-gray-200">
                        <tr class="text-left text-nowrap">
                            <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">NRP & Nama</th>
                            <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">UKM</th>
                            <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">File</th>
                            <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Line ID & Phone</th>
                            <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Seleksi</th>
                            <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Payment</th>
                            <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200"></th>
                        </tr>
                    </thead>
                    <tbody id="result" class="drop-shadow-lg">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
