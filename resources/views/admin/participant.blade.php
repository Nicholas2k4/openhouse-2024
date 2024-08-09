<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/hamburger.css') }}">

    <!-- JS -->
    <script src="{{ asset('js/toggleNav.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#ukm').change(function() {
                let selectedValue = $(this).val();
                $.ajax({
                    url: '{{ route('admin.getUsersByActivity') }}',
                    method: 'GET',
                    data: { slug: selectedValue },
                    success: function(response) {
                        let tableBody = $("#dataRow");
                        tableBody.empty(); // Kosongkan tabel
                        response.forEach(function(user, index) {
                            console.log(user.name);
                            let row = `<tr>
                                <td class="py-2 px-4 border-b border-gray-200 text-sm">${index + 1}</td>
                                <td class="py-2 px-4 border-b border-gray-200 text-sm">${user.nrp}</td>
                                <td class="py-2 px-4 border-b border-gray-200 text-sm">${user.nama}</td>
                                <td class="py-2 px-4 border-b border-gray-200 text-sm">${user.line_id}</td>
                                <td class="py-2 px-4 border-b border-gray-200 text-sm">${user.phone}</td>
                            </tr>`;
                            tableBody.append(row);
                        });
                    }
                });
            });
        });
    </script>
</head>

<body>
    <!-- Navigation Includes -->
    @include('admin.includes.navigation')

    <!-- Main Content -->
    <div class="lg:ms-64">
        <div class="max-w-md mx-auto pt-6 pb-6" >
        <label for="UKM" class="block text-sm font-medium text-gray-700">Pilih UKM</label>
        <select id="ukm" name="ukm" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
    </div>

    <!-- Tabel -->
    <div class="max-w-4xl mx-auto overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-700">Nomor</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-700">NRP</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-700">Nama</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-700">Line ID</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 text-left text-sm font-semibold text-gray-700">Phone</th>
                </tr>
            </thead>
            <tbody id="dataRow">

                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>