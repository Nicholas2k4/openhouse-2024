@extends('admin.layouts.layout')
@section('content')
<div class="h-full justify-center px-4">
    <h1 class="text-3xl font-bold py-4">List Pendaftar & Validasi</h1>
    <div class="overflow-auto rounded-lg bg-white drop-shadow-lg">
        <table class="w-full">
            <thead class="bg-gray-200 border-b-2 border-gray-200">
                <tr class="text-left text-nowrap">
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">NRP</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Nama</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">UKM</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">File Seleksi</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Seleksi</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Bukti Transfer</th>
                    <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Status Transfer</th>
                    <th class="p-3 text-md font-bold tracking-wide"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-nowrap hover:bg-amber-100 transition">
                    <td class="p-3 border-e-2 border-gray-200">C14220004</td>
                    <td class="p-3 border-e-2 border-gray-200">Bryan Mogens Warren</td>
                    <td class="p-3 border-e-2 border-gray-200">Basket</td>
                    <td class="p-3 border-e-2 border-gray-200 text-center">
                        <a href="">
                            <button class="p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded">
                                Open Drive
                            </button>
                        </a>
                    </td>
                    <td class="p-3 border-e-2 border-gray-200">
                        <span class="font-bold text-green-500 rounded">Yes</span>
                    </td>
                    <td class="p-3 border-e-2 border-gray-200 text-center">
                        <a href="">
                            <button class="p-1.5 text-sm bg-sky-500 hover:bg-sky-600 transition text-white text-nowrap rounded">
                                Open File
                            </button>
                        </a>
                    </td>
                    <td class="p-3 border-e-2 border-gray-200">
                        <span class="font-bold text-red-500 rounded">No</span>
                    </td>
                    <td class="p-3 border-s-2 text-center text-nowrap">
                        <a href="">
                            <button class="p-1.5 text-sm bg-green-500 hover:bg-green-600 transition text-white text-nowrap rounded">
                                Validate
                            </button>
                        </a>
                        <a href="">
                            <button class="p-1.5 text-sm bg-red-500 hover:bg-red-600 transition text-white text-nowrap rounded">
                                Reject
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection