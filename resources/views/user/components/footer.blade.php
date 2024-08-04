<style>
    footer {
        background-image: url("{{ asset('assets/bottomend.png') }}");
    }
</style>

<footer class="w-full h-[100px] flex justify-between items-center sm:px-10 px-3 space-x-3">
    <div class="contact-us text-white flex items-center">
        <h5 class="font-bold sm:text-2xl text-lg sm:me-7 me-3 text-nowrap">Contact Us</h5>
        <a href="#" onclick="window.open('https://instagram.com/openhouse.pcu')"
            class="border border-white rounded-3xl p-2"><i class="fa-brands fa-instagram fa-xl"></i></a>
        <a class="border border-white rounded-3xl p-2 sm:ms-5 ms-2"><i class="fa-brands fa-line fa-xl"></i></a>
    </div>
    <div class="it">
        <p class="sm:text-lg text-xs text-nowrap">&copy; IT x Creative Openhouse 2024</p>
    </div>
    {{-- <div class="back-to-top text-3xl text-white cursor-pointer"
        onclick="document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
    ">
        <h1>Back to Top <i class="ms-2 fa-solid fa-arrow-up fa-lg"></i></h1><span></span>
    </div> --}}
</footer>
