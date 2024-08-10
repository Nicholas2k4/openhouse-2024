<style>
    footer {
        background-image: url("{{ asset('assets/bottomend.png') }}");
    }


    .contacts {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 10px;
    }

    .contacts .contact-button {
        display: inline-block;
        height: 45px;
        width: 45px;
        margin: 0 7px;
        overflow: hidden;
        background: white;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.3), 0 0 30px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease-out !important;

    }

    .contacts .contact-button .icon {
        display: inline-block;
        height: 45px;
        width: 45px;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 45px;
        transition: all 0.45s ease-out !important;
    }

    .line {
        background-color: white;
        color: #4cc764;
    }

    .instagram {
        color: white;
        background: linear-gradient(45deg, #ffde85 0%, #f7792a 30%, #f7504f 40%, #d82b81 60%, #d82b81 75%, #9536c2 100%);

    }

    .contacts .contact-button .icon i {
        font-size: 25px;
        line-height: 45px;
        transition: all 0.3s ease-out !important;
    }


    .contacts .contact-button span {
        font-size: 20px;
        font-weight: bold;
        margin-left: 10px;
        transition: all 0.3s ease-out !important;
        line-height: 40px;
    }

    .contacts .contact-button:hover>.icon {
        transform: rotate(720deg);
    }

    .contacts .cb1:hover {
        width: 230px;
    }

    .contacts .cb2:hover {
        width: 250px;
    }

    .contacts .cb1 {
        animation: fadeLeft 1s;
        transition: 1s ease;
    }

    .contacts .cb2 {
        animation: fadeRight 1s;
        transition: 1s ease;
    }

    #line {
        color: #4cc764;
    }

    #ig {
        background: linear-gradient(45deg, #ffde85 0%, #f7792a 30%, #f7504f 40%, #d82b81 60%, #d82b81 75%, #9536c2 100%);
        background-clip: text;
        color: transparent;
    }

    @media screen and (max-width: 450px) {
        .contacts .contact-button {
            height: 30px;
            width: 30px;
            line-height: 20px;
        }

        .contacts .contact-button .icon {
            height: 30px;
            width: 30px;
            line-height: 25px;
        }

        .contacts .contact-button .icon i {
            line-height: 30px;
            font-size: 15px
        }

        .contacts .contact-button span {
            margin-left: 5px;
            font-size: 12px;
            line-height: 20px;
        }

        .contacts .cb1:hover {
            width: 130px;
        }

        .contacts .cb2:hover {
            width: 150px;
        }
    }
</style>

<footer class="w-full h-[100px] flex sm:justify-between items-center flex-col sm:flex-row sm:px-10 sm:py-0 py-5 px-3 space-x-3 sm:space-y-0 space-y-5">
    <div class="sosmed flex flex-row items-center">
        <h5 class="font-bold sm:text-2xl text-lg text-white sm:me-7 me-3 text-nowrap pt-[10px]">Contact Us</h5>
        <div class="contacts" id="contacts">
            <div class="contact-button cb1" onclick="window.open('https://line.me/R/ti/p/@001pyqes')">
                <div class="icon line"><i class="fa-brands fa-line"></i></div>
                <span id="line">@001pyqes</span>
            </div>
            <div class="contact-button cb2" onclick="window.open('https://instagram.com/openhouse.pcu')">
                <div class="icon instagram"><i class="fa-brands fa-instagram"></i></div>
                <span id="ig">@openhouse.pcu</span>
            </div>
        </div>
    </div>
    <div class="it">
        <p class="sm:text-lg text-xs text-nowrap text-white">&copy; IT x Creative Openhouse 2024</p>
    </div>
</footer>
