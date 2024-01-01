<?php
session_start();
if(isset($_SESSION['email'])){
    header("Location:./dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en" class="dark">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="icon" href="./img/titleLogo.png" type="image/x-icon" />
        <link rel="stylesheet" href="./css/login.css" />
        <link rel="stylesheet" href="./css/login2.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/style2.css" />
        <link rel="stylesheet" href="./fonts/fonts.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            rel="stylesheet"
            href="https://necolas.github.io/normalize.css/latest/normalize.css"
        />
        <link rel="stylesheet" href="aos-master/dist/aos.css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
    </head>
    <body
        class="scrollbar-thin scroll-smooth scrollbar-thumb-darkBG dark:scrollbar-thumb-darkWhite dark:bg-darkBG dark:text-darkWhite"
    >
        <div
            id="loginMenu"
            class="md:mt-10 z-50 dark:bg-darkBG"
            data-aos="fade"
            data-aos-duration="2000"
        >
            <div id="hamburger" class="text-center scale-150 md:hidden py-10">
                <i id="burgerIcon" class="fa-solid fa-bars"></i>
            </div>

            <div
                id="mobileMenu"
                class="backdrop:blur-xl hidden md:hidden text-black dark:text-darkWhite h-full"
            >
                <ul
                    id="navlinksMobile"
                    class="text-center pt-20 pb-20 tracking-widest"
                >
                    <li>
                        <i
                            class="fa-solid fa-sun dark:text-darkWhite m-5 text-center text-darkBG cursor-pointer hover:-rotate-45 duration-300"
                            id="iconSwitcher"
                            onclick="switchDarkMode()"
                        ></i>
                    </li>
                </ul>
            </div>

            <div
                id="navbar"
                class="hidden md:flex text-xl justify-between items-center pr-16 pl-16"
            >
                <span id="logo" class="text-5xl">Ayush</span>
                <ul id="navlinks" class="flex my-4 space-x-5 items-center">
                    <li>
                        <i
                            class="fa-solid fa-sun dark:text-darkWhite text-center text-darkBG cursor-pointer hover:-rotate-45 duration-300"
                            id="iconSwitcher2"
                            onclick="switchDarkMode()"
                        ></i>
                    </li>
                </ul>
            </div>
        </div>

        <div class="blob-c absolute" data-aos="fade" data-aos-duration="2000">
            <div class="shape-blob"></div>
            <div class="shape-blob one"></div>
            <div class="shape-blob two"></div>
            <div class="shape-blob three"></div>
            <div class="shape-blob four"></div>
            <div class="shape-blob five"></div>
            <div class="shape-blob six"></div>
        </div>

        <form class="form relative" onsubmit="login(event)">
            <div class="text-center mt-16">
                <span
                    class="text-3xl"
                    style="font-family: amster"
                    data-aos="fade"
                    data-aos-duration="2000"
                    >Welcome!</span
                >
            </div>
            <div
                class="text-center mt-20"
                data-aos="fade-up"
                data-aos-duration="500"
            >
                <input
                    type="email"
                    id="email"
                    placeholder="Mail ID"
                    class="p-3 m-2 h-16 border-2 border-black rounded dark:bg-darkBG dark:text-darkWhite dark:border-darkComment"
                    required
                />
                <br />
                <div class="relative">
                    <input
                        type="password"
                        id="password"
                        placeholder="Password"
                        class="p-3 m-2 h-16 border-2 border-black rounded dark:bg-darkBG dark:text-darkWhite dark:border-darkComment"
                        required
                    />
                    <i
                        class="fa-solid fa-eye absolute ml-5 mt-8 hover:scale-150 duration-500 cursor-pointer active:scale-90"
                        onclick="passwordState()"
                        data-aos="zoom-in"
                        id="eye"
                    ></i>
                </div>
                <br />
                <button
                    class="bg-darkBG p-3 px-10 mt-10 h-16 text-darkWhite font-bold italic text-lg hover:bg-darkWhite dark:bg-darkWhite dark:text-darkBG"
                    id="btn"
                    type="submit"
                >
                    SUBMIT
                </button>
            </div>
        </form>

        <div id="loginFooter">
            <div class="absolute inset-x-0 bottom-0 p-10 text-center">
                <p class="dark:text-darkWhite text-black">
                    Made with ❤️ by AYUSH
                </p>
            </div>
        </div>

        <!-- scripts -->
        <script src="aos-master/dist/aos.js"></script>
        <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/toastify-js"
        ></script>
        <script>
            AOS.init();
        </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="script.js"></script>

    </body>
</html>
