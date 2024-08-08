<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/fc45e0c6e7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .bg-section {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
        .slider-wrapper {
            overflow: hidden;
            max-width: 1200px;
            margin: 0 70px 55px;
        }

        .slider-wrapper .swiper-pagination-bullet {
            background: #ffffff;
            width: 10px;
            height: 10px;
        }

        @media (max-width: 768px) {
            .slider-wrapper {
                margin: 0 10px 40px;
            }

            .slider-wrapper .swiper-slide-button {
                display: none;
            }
        }


        .menu-center {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            margin-top: 64px;
            padding-top: 10px;
        }

        .video-container {
            position: relative;
            padding-top: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <div class = "z-[0] bg-section fixed w-full h-screen"></div>
    <nav class=" h-[64px] fixed z-[100] w-full backdrop-blur-sm bg-white/15">
        <div class="px-[30px] md:px-[50px] xl:px-[100px] mx-auto flex justify-between items-center h-[100%]">
            <div class="text-2xl text-white">
                <a class="cursor-pointer fa-solid fa-chevron-left" href="{{ url()->previous() }}"></a>
            </div>

            <div class="hidden sm:flex justify-between gap-10">
                <a class="text-white text-[20px]" href="#video">Video</a>
                <a class="text-white text-[20px]" href="#about">About</a>
                <a class="text-white text-[20px]" href="#register">Register</a>
            </div>

            <div id="bar" class="text-white text-[25px] sm:hidden">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Menu on Small Screen -->
    <div id="menu" class="z-[10] hidden h-screen w-full bg-red-500 flex flex-col items-center gap-5">
        <a class="text-white text-[20px]" href="#video">Video</a>
        <a class="text-white text-[20px]" href="#about">About</a>
        <a class="text-white text-[20px]" href="#register">Register</a>
    </div>

    <!-- Video Section -->
    <div class="z-5 bg-red-500 h-screen" id = "video">
        <div
            class="px-[30px] md:px-[50px] xl:px-[100px] mx-auto h-full flex flex-col-reverse justify-center items-center md:flex md:flex-row md:justify-between md:items-center">
            <!-- Right Side -->
            <div class="z-[10] flex flex-col w-full sm:w-2/5">
                <div class="text-[64px] text-white">
                    {{$ukm->name}}
                </div>
                <div class="w-full text-right text-[20px] text-white pr-[50px]">
                    Details
                </div>
            </div>

            <!-- Left Side -->
            <div class="w-full sm:w-3/5 mt-5 sm:mt-0">
                <div class="video-container aspect-w-16 aspect-h-9">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Ml-B-W91gtw" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="z-[10] bg-red-500 h-screen" id = about>
        <div
            class="px-[30px] md:px-[50px] xl:px-[100px] mx-auto h-full flex flex-col-reverse justify-center items-center md:flex md:flex-row md:justify-between md:items-center">
            <!-- Left Side -->
            <div class="z-[10] flex flex-col w-full sm:w-3/5 mt-10 mr-10 swiper">
                <div class="slider-wrapper">
                    <div class="card-list swiper-wrapper">
                        <div class="card-item swiper-slide">
                            <img class = "mx-auto"
                                src = "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2013/07/ar-05.jpg?ssl=1">
                        </div>

                        <div class="card-item swiper-slide">
                            <img class = " mx-auto"
                                src = "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2013/07/ar-05.jpg?ssl=1">
                        </div>

                        <div class="card-item swiper-slide">
                            <img class = " mx-auto"
                                src = "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2013/07/ar-05.jpg?ssl=1">
                        </div>

                        <div class="card-item swiper-slide">
                            <img class = " mx-auto"
                                src = "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2013/07/ar-05.jpg?ssl=1">
                        </div>

                        <div class="card-item swiper-slide">
                            <img class = " mx-auto"
                                src = "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2013/07/ar-05.jpg?ssl=1">
                        </div>

                        <div class="card-item swiper-slide">
                            <img class = " mx-auto"
                                src = "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2013/07/ar-05.jpg?ssl=1">
                        </div>

                        <div class="card-item swiper-slide">
                            <img class = " mx-auto"
                                src = "https://i0.wp.com/digital-photography-school.com/wp-content/uploads/2013/07/ar-05.jpg?ssl=1">
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="pb-[100px] text-white swiper-slide-button swiper-button-prev "></div>
                    <div class="pb-[100px] text-white swiper-slide-button swiper-button-next"></div>
                </div>
            </div>
            <!-- Right Side -->
            <div class="z-[10] w-full sm:w-2/5 mt-5 sm:mt-0">
                <div id="desc" class="bg-white rounded-[20px] p-5 flex flex-col justify-between">
                    <div>
                        <div class="text-[16px] text-black">
                            {{ \Str::limit($ukm->description, 600) }}
                        </div>
                    </div>
                    @if(strlen($ukm->description) >600)
                    <!--Read More-->
                    <div class="relative w-full text-[12px] text-black flex justify-end items-center gap-1">
                        <div class = "mr-[20px]">
                            Read more
                        </div>
                        <i class="absolute top-[4px] fa-solid fa-arrow-right-long"></i>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Register Section -->

    <div class="z-[10] bg-red-500 h-screen" id = "register">
        <div
            class="pt-[100px] pb-[100px] px-[30px] md:px-[50px] xl:px-[100px] mx-auto h-full flex flex-col justify-center items-center md:flex md:flex-row md:justify-between md:items-center">
            <!-- Right Side (Poster Optional) -->
            <div class="z-[10] flex flex-col w-full sm:w-2/5 items-center mt-5">
                <img class = "w-[200px] md:w-[300px] h-auto" src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALwAAAEMCAMAAABJKixYAAABIFBMVEUAre+rSZyy0jP////5oRytR5oAtfaSXq0Aq+8ArvCy0zEAqe6rP5+uxES0PpUdq+wArPWdz1qp0TcAqv+lz1Culm2y1yypRJqlQKOw0jetzxgApu68c7CoQJm+5vqt1jjNm8WsknDy9+IxtPC+2VeoRaD7owuWWKixWKOmOZbTd2aJ0fbi9P2x4Pndu9fV5pvx+/5vx/TO7ftNvfK4aqzIkL/A2mGpzQD5mgCAzfVYwPOZ1/fj9v3r1+j37vW1Y6jYr9Hhwtzj7r7f7LT6/PPN4YPYstLDhLjz6PHG3XLP44zt9NW51kvW5p381Kb+9Of7wHj5qDWgI4+qjHbh7bn6r03948r94Lz4kQD7x4n6tGD94sP5py77wm/7uV7+tEoZ2dB8AAAPTklEQVR4nO2dDX/aOpbGTZRmZenu7M7O7vViYw8bMx28vNoGEhuSQIAQHNPedJve6dw2/f7fYo9kXgwxSSa9DdL8eJoGv5D2L/no0ZFRLEXZjdSntSOyvfbaa6+99tprr70EEMZ46zlKqWFQuv0NO5bqhqGfTYdpYHm9nldzDTHxaQ2BaOapClqo6Wa+Y+ficFls2EIpdY3XR3tKOKnd6kM0I2GvWlY1oRev7mkvqdgHUU+77LBnQ5OlPn9TKFrcY3ceFdZmvdrsaC25IJh6LO5FgzcYFY+co/UTlAWNtwqmJnufYPSsfpu8BBshzSveXtLiAHZ7YkU9r9+uwciaa2S8HacqXqHNrIaxU6msflUFMzI3TcaDPEiVh3cHQhkOdxRoqpzMW3NLVhw7tc9bdoah7k54EQtJhKfO2A8CiV8kgeApi/UqQzRYP1RbwfJ69tbgjc3y7Vi0ugjsxO5XZ3B3vTCLN4vTT+Fw1fNQtObjSfNcI+VN2BUGPm3vnHbl49xC1/ukjEO71FortdeylwdOmXkxdihOYy38g+Mum2hGjIhl9Op6XQfp67AVXpCa5wlAKlvhnr8wGNHDhm7kiWvDQcEb7KazK9hOuSXPG9YDXCSr5CyWaq+ksl6oNx99VB6MT3gnLEha6aNsJS14W3pwlP2PvbKotQV+nls+TMxscRIzdQv7wi3xZkrMrdQTwuZ5g2xam0LLZsqbRNpbkjGXECHPK7Zr0HUZq3sEq2x5IYQEyYj5cBo9+LQ9sc+kb+JxtTIXfuevKkbU9B44YXKcXZBkrLeeZiadgBD3K3kin+XZfAwyP8Gr3ktubmO1J07Fe9tQOHFySZLQqobUMHDQ3FLaHYjHQJCFkth/0hiMWuKd1eQ+qxhBM0/BMqsR+yu3VIxu2v/FYE9io5bNwofZzcVOWF12vLYY7ArPxrbNSjpKn8TU79Y8q1YRBf0fE8as9xKipf5TiCZmuPy2tsfqGYtb2bhSs1ky4CvUno+NsAob2A4x9msBpYElyJjpgXBQs6HjtyGLCXvzHsmvVil2ezWqVo9qblBTE3qM+cXAVHnkg+ZXFa0ERpVSqxJg37aoHdIQHAZydd8HeM+ouJZtwKai+oFrd30ahl21ktmp7UI9rwuIwIMBXqn6HlZUgIeQobTmVWnouVWoebsZWlbYM7yu23QFCSRq+YZn91wLIh/gIWO0E3gF4H3LCGuGXWG7tmUEgWGploItwxVjJJLABwGH9yj1XCBdwIcAb8GwhI07lvCqKgw8EHtdiqkbQmR0qRtACGG1Bmx+BdOu5R3hsMLaMTvp0q7aVdUuDcUIG+bzcythzo7519LnMe8EknQgOakkZwVh32t3YnGTxIeyCBFlGUd8M5VBCCbf8kLqehazFG71XNitQJFqLB8Gt2c3bWxBHCYt7NpGzwhUm5u51zOS9qh6YPoVxovdGjdLNWQZ8a5xNwQ9q0cxIAKYSmEoDp2Ta1hg8GrPZ7C+pXrwogYq9Aa7pt0QdqsVSis9fkuYspSs5imQwFiGZXXZzRq4CBYLG0tt0kCw2MHYYFOYjCqkiwxeMZpdw6tZzbBqGDWIlZpvdCETO4LeFVI0oeCx5dtN1bP9qlFRGTyFiIHMMvSwF6pVNbArXcULec1bVDB4xa7VfICq2dD3Q4aM7YCq4C42yxLgTGDTCk8iVVd1l+MVYYR5CoATj6fL3n8+AFyNA/E+L9hrr39uSf3rjVLBq4uv1b682sPvSsLDP/Yb04/DP+OXsV9D20rwOPy/iaFtkI/D/2H3evPmD3/dNvfmcficCHrzL3v43WgPvytth39cL/zvNMfRnndQPHitcHbWNjcOOu2zs9aL6F8X3jlD6NzZOHaFECqID6+V2eSNSRpUY+WRAp5XMjpLVb1ZPodrIQW8idBggFB5SapNoDD1tgzwZhEoW0C7rHoTYqb4oSgDvHOOrh3nGqFV3GjnE8eUAZ7FSNFkqMWVW4LDSwHPfIUxbrqlDPDaRRLtzmCDVQZ4Z+4zWmHdLaWAzy2YWZMtp2AlgDf7i76VwV6lOyrx4R3WTk0u2ESp7Ex8eBO60bN2kasNcZPKLcWHZ4Ge1vUqboSHZxazrlUGLzw866AK5aUAd7BKcASHZ4n89Wqsp2lQ9cuTosM79bUmyvf7i33R4VlNpztVliqcSwLPOqirtXE3awNtTRL4er28dkQr1OtFbbV98RL2Vwob6FY3jmimqaW2X8T+ap2UZjKTyZnJtgZfbPc79Vqd1OTqwmy3zH4OCjDpTwpXbbPFgl5jf7QXluOV4M06cA8mrUG55VxctZz6h7rTB7Mst8sTrTUpCNxgWZMdQH1PnGK5NSi02leT/qDd6pvOoHVWLJwVi3WR4bWBVm/Xr5x+uTCYTHL1D/3ypHimmX0HilQsFPovYX+9xKxfNstlrZWbOBPY1grQZuFvQYOMpwVfIsNzt8kt2idzHr7D9+dfQsObOe7s3FjmZsl3vsMwXytsWlfFiyvoU812gd1murqYXEHUtIoQOa0XG/6rxbxTZ36ZK4PLmBDkxXKub2oTdqRcaL+Q/tWGgZOiA6hmH0x9cGHWJ06/aOacKyhA4WzyQvrXqvl2PzcpD8oXxcFgUi+0y/V2bnBRhmuhMfMpig1fKBZzxUK54ECUOIVCMdcqlgvMMXMX4JMvSypfz200noklDsl3zKVFvthvXvmjzN9Xe/hd6aXwP/1QPXNk9VL4/3qB/ufZ+r/n0b8U/ucfqvinHwp/8CNF/nUP/3vDEyIPPNH1tT2ycURkeDI9vllVtd65GSF03NCfrH0h4PVjhMYLVL2BAB2OHD8ZOyLAkxLDnYcJ6SB0qet6aQQvEsDrl2g4QqWknvUbdHxCWPAgJAE8ySNELhf1TBqXPIIIGaH4ibgRAF4fopsTqOeDBJUkDZUQJAM8VHGHQJttrEUJmcoQNiRijZU00Gjd60foo/jwUOcR4VEyXUUJuxKjA+GtklkjM3SwnJtlTTN2iKUnf3bX8GCNQ52AOqsGmrA/nR/sGp7EEC4lpngZ5IQAe0mC3Eb/mJ5ooC/YR6XnpJU7hicHLI+ZC6HoZ3YI2J9yeCHgIQsbneiJTi65Zx6M0Cj/LPadw4/QbBHcLD+bMvZjfV4esa2SjBOfnJfkGNyyk4qjqdDpAeCm8l7oa1HcSbXfsdDwpFNKhzcplfIHpZXyj//0rmOeLJTaJKmDQsND8hiPo3wjJmTaiKOpPl6W4qmf3D08ORiW4mhGZqXSbDrtzOIhFGccxeNxJAH87GPUGUd6Yxb9PJ1Gw+FlR59FcSOalZ6ymt3Dw1A1HkYdqPVo3IjHRJ/myXiaH3em8dNJ5c7hIXD0dAvlLffgmUG/a3h2c2x+dy8hJvrBk4MQQeDJxxJpEDIcE5IfNqYzSCYv9Xzn6ZtlQsBPS7NZrDca0ygms5NhrEeRnp8OGzJklWRcmpWifCnqXOaH+U4nys8u83EUyQEf50vjfGnaKYG9T2Gzo5dIHjIDGeAPyLJDXb7ypvsc9p3Df5f28I/oP75bO4TH36t//+P2+P/R8I8p9RhqSo0tD6UWFb6yfMY9DmpW1898XqOY8GytjfljB456qFndsvSWmPBs5aHkAY3UA26qeJmL5QkJj31U6TWTxXtoSPmBrOUJhIQ3LKR0FwtW8e+2PPA2soyj1YKdmBpdacKG1pCPDQ/58303sLIXtRARXmHL4uBwCcwXa8lyegHhcYUvSGQ0F25p+93sVZQEhKc9xBdy6y4XscLUz1x8Szz45aLY6cXPwPilgIeW2q10QRWPuaVqz+Ez3ioevA0eyXNGGsKWD40Xs7BpZiw4Jxw8tZaWTqvIhutghX4le41F4eDtVaSD7Vg0WXepmbmQknDwSupp5XxVAkr90DYyE3rx4BVbtVWfPXddZVvJgCv7neLB47DiBn6g2kEYBoGLQ9/2Qz/zrQLCu7YbuGrX77quH7q0ErisDJLAB76PfcgJFN/1XRv7vLvNfKt48DD2pskDwpNbBI88/1s8eBvChvoBjJ5ChS1EhP2tqyiJB6+6SoBp4LtHbiWgrot9d9uD48WDxy51bd8PK4rrVmy/gt0wXJRLIPjtz1RkT31NXtXHntC8S/g//WN6GDu7hGf/Rz6t1KdlhKydgAP/+acHj+DdJfyDjwn0aXww/whhuv45MSEAL1TMP/j/OstJw9PlzO3lScHh9Zub+aRhfXRzszmDT2x4EqP8iE3MIvrwZrZZ84LD68PjkwabNAylgG2pwoboaEwIm36lHzdOHsCLXfOkMTrRTy6PdRIdnwD8yQaY0PAnI2ilN8cohtY6HB6PPm5M/hQZHtwxajQa0ejyZHh5eXk8upQIXj++PIGuSI8QYTNYpQobUkrmxBMyilgPO5PL5xezDPT57KBNGpHhSTyddjqkM+2MWSb2cM6n0PAdgJ82xp3xVI+icfRgornQ8HF8kI/hD8mTeRYsDzybLByX9E7cOZgeZM2RFxt+Oj0YR6XSlExJlDHrU2z4mE/OzsdxTEqx8DX/54f6Ob0jdA97mNYt+3Z3d3e7OvRnSeBP36G3wI4+fXr3Vj74979+Pj38+6e/nZ5KV/Onn999ew/wo98+p+HXzF5c+PeHf3t/9/bul2+//Xqags/LAP939O7dp99O354evn3/VrKaP/30+ZdfvqLD+9vT2/enksHfjU6h1n9998vo1/dfZav5L4e8ur+cfrk/lK/B3n/++vXr/f3d/f39oXTwUOu33w6/fPlyeysh/Ne7u/vbeyjAoSzwb1f6Brr9dnvLtuWA/99syQH/l0Q/nV+wl9z1T3z3v99KAZ/8tNm/Zs+Rd87mz2yUCt45N8+hCJOzD4508Fp78KHeNzV0fX5mygbvXLdbk/MP7bMPH5LAkQheK5wPzgbnhX7f4c+mlgoe2qnjOJPrHJpM0IVkNZ9jj1bVzKJZvqoni+XIBN8qTArwdVFoteSzyvLFRQv+specdPBau1wAtQqLBRUkgX/DlSuXod7Ly8UgJIGnIMPg3+AF//WNTPCqqtJagBW76nlV+0gueMbfrFI+sampSgdPa67H5mzjSo3KB980Qo//foiqyAZPA8u2m7aCXYtKFza0almWV6NG1Vdkg8euB0apIBqyVisZvBL6bHK/a/NX2eCx7YNC1WeztGWDV2w7BH5WBAnhVduf/26FhPAQ7a5r+6EtI7zCZvjPN2SEX2oPv4f//eFFm9EqM/z/A+RV89s+agY+AAAAAElFTkSuQmCC">
            </div>

            <!-- Left Side (Slot, Price, Buttons) -->
            <div class="z-[10] w-full sm:w-3/5 mt-5 sm:mt-0">
                <div class="flex flex-col items-center">
                    <!--Slot & Price-->
                    <div class="flex flex-row justify-center">
                        <div id = "show-slot" class = "flex flex-col justify-center pl-[20px] pr-[20px] border-r-[1px]">
                            <div class = "text-white text-[48px] md:text-[100px] font-bold leading-tight">{{$ukm->current_slot}}</div>
                            <div class = "text-white text-[16px] md:text-[26px] m-[-2px] pb-[4px] w-full text-center">Slot left</div>
                        </div>
    
                        <div id = "show-price" class = "flex flex-col justify-center pr-[20px] pl-[20px]">
                            <div class = "text-white text-[48px] md:text-[100px] font-bold leading-tight">
                                @if ($ukm->regist_fee == 0)
                                    0K
                                @else
                                    {{ substr($ukm->regist_fee, 0, -3) }}K
                                @endif
                            </div>
                            <div class = "text-white text-[16px] md:text-[26px] m-[-2px] pb-[4px] w-full text-center">Price</div>
                        </div>
                    </div>

                    <div class = "text-[18px] italic font-light text-white text-center">
                        Fee is not paid at booking time, it will be paid after you have been accepted.
                    </div>

                    <!--Button Book-->
                    <button name = "ukm" value = {{$ukm->slug}} class="mt-10 rounded-full w-full bg-white text-black p-[15px] text-[24px] md:text-[28px] font-bold">
                        Book Your Slot!
                    </button>

                    <!--Button Payment-->
                    <button name = "ukm" value = {{$ukm->slug}} class="mt-5 rounded-full w-full bg-white text-black p-[15px] text-[24px] md:text-[28px] font-bold">
                        Payment
                    </button>
                </div>
            </div>
        </div>
    </div>





    <!-- Popup -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.getElementById('bar').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menu.classList.add('menu-center');
            } else {
                menu.classList.add('hidden');
                menu.classList.remove('menu-center');
            }
        });

        const swiper = new Swiper('.slider-wrapper', {
            // Optional parameters
            loop: true,
            grabCursor: true,
            spaceBetween: 1,

            autoplay: {
                delay: 2000,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
</body>

</html>
