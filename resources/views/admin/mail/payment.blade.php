<div
    style="
    background-color: #F7EECF;
    display: flex-column;
    justify-content: center;
    padding-bottom: 1rem;
    
">
    <div
        style="
        margin-left: auto;
        margin-right: auto;
        padding: 0.5rem;
        color: white;
        text-align: center;
    ">
        <div class="">
            <img src="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}" alt=""
                style="width: 100px; height: 50px">
        </div>
        <h3 style="margin-left: 0.5rem; margin-bottom: 0; margin-top: 9px; font-size: 24px; color: black;">Open House
            2024</h3>
    </div>
    <hr>
    <div
        style="
        background-color: #e5e7eb;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
        padding: 0.5rem 0.5rem 0.5rem 1rem;
        border-radius: 0.75rem;
    ">
        @if ($status == 'rejected' && $type == 'payment')
            <h4 style="margin-top: 10px;">Hai {{ $user->name }}, pembayaranmu ditolak !</h4>
            <h4 style="margin-top: 20px; margin-bottom: 5px">Kamu gagal terdaftar pada {{ $ukm->name }} karena bukti
                pembayaran yang tidak valid</h4>
        @elseif ($status == 'accepted' && $type == 'payment')
            <h4 style="margin-top: 10px;">Hai {{ $user->name }}, pembayaranmu telah divalidasi !</h4>
            <h4 style="margin-top: 20px; margin-bottom: 5px">Selamat! Kamu berhasil terdaftar pada {{ $ukm->name }}
            </h4>
        @elseif ($status == 'rejected' && $type == 'file')
            <h4 style="margin-top: 10px;">Hai {{ $user->name }}, sayang sekali kamu tidak lolos seleksi</h4>
            <h4 style="margin-top: 20px; margin-bottom: 5px">Kamu gagal terdaftar pada {{ $ukm->name }}</h4>
        @elseif ($status == 'accepted' && $type == 'file')
            <h4 style="margin-top: 10px;">Hai {{ $user->name }}, selamat! kamu telah lolos seleksi.</h4>
            <h4 style="margin-top: 20px; margin-bottom: 5px">Kamu bisa melanjutkan proses menuju pembayaran.
                <a href="{{ 'https://openhouse.petra.ac.id/pendaftaran/' . $ukm->slug }}">LINK PENDAFTARAN {{ $ukm->name }}</a>
            </h4>
        @endif

        <h4 style="margin-bottom: 10px">Jika ada pertanyaan lebih lanjut, silahkan hubungi OA Line Openhouse
            <a href="https://line.me/R/ti/p/@001pyqes">@001pyqes</a>
        </h4>
    </div>
</div>
