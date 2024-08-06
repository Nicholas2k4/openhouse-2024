@extends('admin.layouts.layout')
@section('content')
<div class="h-full justify-center px-4">
    <h1 class="text-3xl font-bold py-4">List Pendaftar & Validasi</h1>
    <div class="overflow-auto rounded-lg bg-white drop-shadow-lg">
        <table class="w-full">
            <thead class="bg-gray-200 border-b-2 border-gray-200">
                <tr class="text-left text-nowrap">
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">NRP & Nama</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">UKM</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">File Seleksi</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Seleksi</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Bukti Transfer</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Code Transfer</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Transfer</th>
                    <th class="p-3 text-md font-bold tracking-wide"></th>
                </tr>
            </thead>
            <tbody>
                @include('admin.includes.dataRow')
                @include('admin.includes.dataRow')
                @include('admin.includes.dataRow')
            </tbody>
        </table>
    </div>
</div>
@endsection