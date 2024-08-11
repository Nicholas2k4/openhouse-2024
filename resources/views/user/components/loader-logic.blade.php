<script>
    $(document).ready(function() {
        const loaderCont = document.querySelector('.loader-container');
        const loader = document.querySelector('#loader1');
        const loader2 = document.querySelector('#loader2');
        const content = document.querySelector(".full-content");

        window.addEventListener('load', function() {
            loader1.style.transform = 'translateY(-100vh)';
            loader2.style.transform = 'translateY(100vh)';

            setTimeout(function() {
                loaderCont.style.zIndex = -1;
                loaderCont.style.display = 'none';
            }, 1400);
            content.style.opacity = 1;
            document.documentElement.classList.remove('disableScroll');

            AOS.init();
        });
    });
</script>
