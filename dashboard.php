<?php 
session_start();
if(!isset($_SESSION['email'])){
    header("Location:./index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="dark">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <link rel="icon" href="./img/titleLogo.png" type="image/x-icon" />
        <link rel="stylesheet" href="./css/login.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/dash.css" />
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
                    <a onclick="logout()" class="cursor-pointer">Logout</a>
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
                    <a onclick="logout()" class="cursor-pointer">Logout</a>
                </ul>
            </div>
        </div>

        <div style="display: flex">
            <div class="w-1/3" style="width: 33.333333%"></div>
            <div
                id="customModal"
                class="bg-darkWhite text-darkBG p-10 text-center items-center w-1/3 dark:bg-darkBG dark:text-darkWhite border-2 dark:border-darkWhite rounded-xl relative hidden"
                style="
                    position: relative;
                    padding: 2.5rem;
                    align-items: center;
                    border-radius: 0.75rem;
                    border-width: 2px;
                    width: 33.333333%;
                    text-align: center;
                "
            >
                <div
                    class="absolute top-0 right-0 p-5 cursor-pointer"
                    id="X"
                    style="
                        position: absolute;
                        top: 0;
                        right: 0;
                        padding: 1.25rem;
                        cursor: pointer;
                    "
                >
                    <span class="text-darkBlue" style="color: #2a9ad1">X</span>
                </div>
                <p class="tracking-wider mt-5">How do you want to proceed?</p>
                <button
                    id="discussButton"
                    class="dark:bg-darkBG dark:text-darkWhite px-5 py-3 mt-5 m-4 rounded-xl hover:bg-darkWhite hover:text-darkBG border-2 border-darkBG dark:border-darkWhite hover:border-darkBG hover:scale-95 active:scale-75 duration-700"
                    style="
                        padding-top: 0.75rem;
                        padding-bottom: 0.75rem;
                        padding-left: 1.25rem;
                        padding-right: 1.25rem;
                        margin: 1rem;
                        margin-top: 1.25rem;
                        border-radius: 0.75rem;
                        border-width: 2px;
                        transition-duration: 700ms;
                    "
                >
                    Discuss
                </button>
                <button
                    id="greetButton"
                    class="dark:bg-darkBG dark:text-darkWhite px-5 py-3 mt-5 m-4 rounded-xl hover:bg-darkWhite hover:text-darkBG border-2 border-darkBG dark:border-darkWhite hover:border-darkBG hover:scale-95 active:scale-75 duration-700"
                    style="
                        padding-top: 0.75rem;
                        padding-bottom: 0.75rem;
                        padding-left: 1.25rem;
                        padding-right: 1.25rem;
                        margin: 1rem;
                        margin-top: 1.25rem;
                        border-radius: 0.75rem;
                        border-width: 2px;
                        transition-duration: 700ms;

                        :hover {
                            --transform-scale-x: 0.95;
                            --transform-scale-y: 0.95;
                        }
                    "
                >
                    Greet
                </button>
            </div>
            <div class="w-1/3" style="width: 33.333333%"></div>
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

        <div
            class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 mt-32"
        >
            <table
                x-data-table
                class="w-full text-sm text-left rtl:text-right dark:bg-gray-700 opacity-80"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <thead
                    class="text-xs text-gray-700 uppercase dark:text-gray-400"
                >
                    <tr>
                        <th
                            scope="col"
                            class="px-6 py-3 bg-gray-200 dark:bg-gray-800"
                        >
                            Name
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 bg-gray-200 dark:bg-gray-800"
                        >
                            Email
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 bg-gray-200 dark:bg-gray-800"
                        >
                            Phone
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 bg-gray-200 dark:bg-gray-800"
                        >
                            Purpose
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 bg-gray-200 dark:bg-gray-800"
                        >
                            Details
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-3 bg-gray-200 dark:bg-gray-800"
                        >
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="tBody" class="bg-gray-100 dark:bg-darkBG"></tbody>
            </table>
        </div>

        <div id="loginFooter">
            <div class="inset-x-0 bottom-0 text-center relative mt-32">
                <p class="dark:text-darkWhite text-black">
                    Made with ❤️ by &nbsp;&nbsp;<a href="./">AYUSH</a>
                </p>
            </div>
        </div>

        <!-- scripts -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="aos-master/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script
            type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/toastify-js"
        ></script>
        <script src="script.js"></script>
        <script>
            $(document).ready(function () {
                getData();
                $("#X").on("click", () => {
                    $("#customModal").hide();
                });
            });
        </script>
    </body>
</html>
