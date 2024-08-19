@extends('admin.layouts.layout')
@section('content')
<div class="h-full justify-center px-4">
    <h1 class="text-3xl font-bold py-4 pb-0 text-center">Game Leaderboard</h1>
    <div class="flex flex-col lg:flex-row p-2">
        <p id="rankCount" class="mt-4 pb-2 lg:mt-0 my-2 lg:my-0 lg:self-center w-full text-center font-bold"></p>
    </div>
    <div class="pb-10">
        <div id="rankTable" class="overflow-auto rounded-lg bg-white drop-shadow-lg">
            <table class="w-full">
                <thead class="bg-gray-200 border-b-2 border-gray-200">
                    <tr class="text-left text-nowrap">
                        <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">NRP & Nama</th>
                        <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Line ID</th>
                        <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Phone</th>
                        <th class="p-3 text-md font-bold tracking-wide border-e-2 border-gray-200">Letter Count</th>
                    </tr>
                </thead>
                <tbody id="rankResult" class="drop-shadow-lg">

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection