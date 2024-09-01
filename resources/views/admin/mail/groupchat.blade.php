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
            <img src="https://openhouse.petra.ac.id/assets/LOGO%20OPENHOUSE%20SEMIFINAL.png" alt=""
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
        <h4 style="margin-top: 10px; margin-bottom: 20px;">Hai {{ $user->name }}, silahkan join grup UKM yang telah
            kamu ikuti.</h4>
        @foreach ($ukms as $ukm)
            <h4 style="margin: 0px !important;">Link Grup {{ $ukm->name }} : </h4>
            <a href="{{ $ukm->groupchat }}" target="_blank" style="font-weight:bold; text-decoration:underline">
                {{ $ukm->groupchat }}</a><br>
        @endforeach

        <h4 style="margin-bottom: 10px">Jika ada pertanyaan lebih lanjut, silahkan hubungi OA Line Openhouse
            <a href="https://line.me/R/ti/p/@001pyqes">@001pyqes</a>
        </h4>
    </div>
</div>
