<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel = "icon" href="./img/titleLogo.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="./fonts/fonts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    <link rel="stylesheet" href="aos-master/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="scrollbar-thin scroll-smooth scrollbar-thumb-darkBG dark:scrollbar-thumb-darkWhite dark:bg-darkBG dark:text-darkWhite">

    <div id="home"></div>
    <div id="menus" class="md:mt-10 z-50 dark:bg-darkBG" >
        <div id="hamburger" class="text-center scale-150 md:hidden py-10">
            <i id="burgerIcon" class="fa-solid fa-bars"></i>
        </div>

        <div id="mobileMenu" class="backdrop:blur-xl hidden md:hidden text-black dark:text-darkWhite h-full">
            <ul id="navlinksMobile" class="text-center pt-20 pb-20 tracking-widest">
                <a href="#home" class="m-5"><li>Home</li></a>
                <a href="#about" class="m-5"><li>About</li></a>
                <a href="#contact" class="m-5"><li>Contact</li></a>
                <a href="#portfolio" class="m-5"><li>Portfolio</li></a>
                <li>
                    <i class="fa-solid fa-sun dark:text-darkWhite m-5 text-center text-darkBG cursor-pointer hover:-rotate-45 duration-300" id="iconSwitcher" onclick="switchDarkMode()"></i>
                </li>
            </ul>
        </div>

        <div id="navbar" class="hidden md:flex text-xl justify-between items-center pr-16 pl-16">
            <span id="logo" class="text-5xl">Ayush</span>
            <ul id="navlinks" class="flex my-4 space-x-5 items-center ">
                <a href="#home"><li>Home</li></a>
                <a href="#about"><li>About</li></a>
                <a href="#contact"><li>Contact</li></a>
                <a href="#portfolio"><li>Portfolio</li></a>
                <li>
                    <i class="fa-solid fa-sun dark:text-darkWhite text-center text-darkBG cursor-pointer hover:-rotate-45 duration-300" id="iconSwitcher2" onclick="switchDarkMode()"></i>
                </li>
            </ul>
        </div>
    </div>

    <div id="moveToTop">
        <div class="rounded-xl bg-black w-14 h-14 flex cursor-pointer text-center p-5 dark:bg-darkWhite" id="arrowToTop">
            <i class="fa-solid fa-angle-up dark:text-darkBG text-white"></i>
        </div>
    </div>

    <div id="Ghar" class="p-20" data-aos="fade">
        <section id="" class="relative items-center mt-30">
            <div class="grid md:grid-cols-2 text-2xl">
                <div id="content" class="mt-20 md:px-32" data-aos="fade">
                    <div id="txt" class=" space-y-10 mb-5 text-center md:text-left">
                        <span id="homeHelo" class="text-6xl">Hello!</span>
                        <p class="text-6xl">
                            <span id="im" class="font-bold md:ml-10">I'm Ayush</span>
                        </p>
                    </div>
                    <span id="element" class="md:ml-48 text-left"></span>  
                    <div class="md:space-x-5 mt-10">
                        <button class="bg-black p-3 px-10 mt-5  text-white font-bold italic text-base rounded-md scale-90 dark:bg-darkWhite dark:text-darkBG" id="btn" onclick="downloadResume()">Resume</button>
                        <button class="bg-black p-3 px-10 mt-5  text-white font-bold italic text-base rounded-md scale-90  dark:bg-darkWhite dark:text-darkBG" id="btn" name="contactRefer">
                            Contact Me</a>
                        </button>
                    </div>
                </div> 
                <div id="img" class="hidden md:flex ml-52 scale-50" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/flagged/photo-1576697362153-ac5f08c9b140?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="dark:brightness-75" alt="">
                </div>
                

            </div>
        </section>
    </div>

    <div id="about" class="p-20">
        <section id="abtme">
            <div class="md:flex md:flex-col-2 space-y-10">
                <div class="md:w-1/2" data-aos="fade-up">
                    <img src="https://images.pexels.com/photos/8059123/pexels-photo-8059123.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="userimg" class="w-96 h-max mt-16 brightness-75">
                </div>
                <div class="md:w-1/2 text-xl">
                    <h1 class="tracking-wide font-bold mt-16" id="abtHead" data-aos="fade-left">About me</h1>
                    <p class="mt-5 mb-5" id="abtPara" data-aos="fade">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas adipisci deleniti eum! Harum eius assumenda rem et, dolorem aut! Libero eveniet mollitia, excepturi dolorum nisi aperiam nulla asperiores neque commodi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur tenetur, hic aspernatur praesentium sit tempora in quos laboriosam fugiat modi repellat sequi optio. </p>
                    <div class="grid grid-cols-2 tracking-wide ">
                        <div class="mb-5">
                            <h1 class="font-bold" id="abtHead" data-aos="fade-left" class="mb-5">Name</h1>
                            <h3 id="abtSub" data-aos="fade">Ayush</h3>
                        </div>
                        <div class="mb-5">
                            <h1 class="font-bold" id="abtHead" data-aos="fade-left" class="mb-5">Email</h1>
                            <h3 id="abtSub" class="text-base md:text-xl" data-aos="fade"><a href="mailto:ayushatword5@gmail.com">ayushatwork5@gmail.com</a></h3>
                        </div>
                        <div class="mb-5">
                            <h1 class="font-bold" id="abtHead" data-aos="fade-left" class="mb-5">Education</h1>
                            <ul>
                                <li><h3 id="abtSub" data-aos="fade" class="text-base md:text-xl">MIT Manipal</h3></li>
                            </ul>
                        </div>
                        <div class="mb-5">
                            <h1 class="font-bold" id="abtHead" data-aos="fade-left" class="mb-5">Work Experience</h1>
                            <h3 id="abtSub" data-aos="fade" class="text-base md:text-xl">Been here for atleast 1yr.</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="myWorks" class="p-20">
        <div>
            <h1 class="font-bold text-3xl mb-28 text-center" data-aos="fade-right">My Work's</h1>
            <div class="grid md:grid-cols-3 md:mb-20">
                <div class="card h-72" data-aos="zoom-in ">
                    <img src="./img/websites/image.png" alt="img1">
                    <div class="overlay cursor-pointer"></div>
                    <a href="" class="text-center">Explore</a>
                </div>
                <div class="card h-72" data-aos="zoom-in ">
                    <img src="./img/websites/image (1).png" alt="img1">
                    <div class="overlay cursor-pointer"></div>
                    <a href="" class="text-center">Explore</a>
                </div>
                <div class="card h-72" data-aos="zoom-in ">
                    <img src="./img/websites/image (2).png" alt="img1">
                    <div class="overlay cursor-pointer"></div>
                    <a href="" class="text-center">Explore</a>
                </div>
                <div class="card h-72" data-aos="zoom-in ">
                    <img src="./img/websites/image (3).png" alt="img1">
                    <div class="overlay cursor-pointer"></div>
                    <a href="" class="text-center">Explore</a>
                </div>
                <div class="card h-72" data-aos="zoom-in ">
                    <img src="./img/websites/image (4).png" alt="img1">
                    <div class="overlay cursor-pointer"></div>
                    <a href="" class="text-center">Explore</a>
                </div>
                <div class="card h-72" data-aos="zoom-in ">
                    <img src="./img/websites/img6.webp" alt="img1">
                    <div class="overlay cursor-pointer"></div>
                    <a href="" class="text-center">Explore</a>
                </div>
            </div>
            <div id="explore" style="font-family: Julius;" data-aos="fade-right">
                <a href="" style="box-shadow: 0px 0px;" data-aos="fade">EXPLORE MORE <i class="fa-solid fa-chevron-right" style="color: #000000;" id="arrow"></i></a>
            </div>
        </div>
    </div>

    <div id="portfolio" class="p-20 text-center">
        <span class="font-bold text-3xl mb-28" data-aos="fade-right">My Experiences!</span>
        <div class="hidden md:flex justify-between pl-20 pr-20 mt-16 mr-20 ml-10" data-aos="fade-right">
            <span class="font-bold text-xl italic">Technology I use.</span>
            <span class="font-bold text-xl italic">Projects currently in progress.</span>
        </div>

        <div class="grid md:grid-cols-2 grid-rows-1">

            <span class="flex md:hidden mt-20 font-semibold italic text-xl">Technology I use.</span>
            <div class="grid md:grid-rows-2">

                <div class="flex md:ml-16 ml-5 items-center" id="backend" data-aos="fade-up">
                    <div class="flex flex-col items-center">
                        <div class="absolute -rotate-90 transform-origin-bottom-left mt-52 mr-20" id="abilityName">
                            <span class="text-gray-400 italic dark:text-darkComment">BACKEND</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="h-5 w-5 bg-black rounded-full mt-24 dark:bg-darkWhite"></div>
                            <div class="bg-black w-1 h-52 dark:bg-darkWhite"></div>
                            <div class="h-5 w-5 bg-black rounded-full dark:bg-darkWhite"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 grid-rows-2 mt-28" id="imgs">
                        <img src="./img/logos/dark/4a.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/2.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/3.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/4.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                    </div>
                </div>

                <div class="flex md:ml-16 ml-5 items-center" id="frontend" data-aos="fade-up">
                    <div class="flex flex-col items-center">
                        <div class="absolute -rotate-90 transform-origin-bottom-left mt-52 mr-20" id="abilityName">
                            <span class="text-gray-400 italic dark:text-darkComment">FRONTEND</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="h-5 w-5 bg-black rounded-full mt-24 dark:bg-darkWhite"></div>
                            <div class="bg-black w-1 h-52 dark:bg-darkWhite"></div>
                            <div class="h-5 w-5 bg-black rounded-full dark:bg-darkWhite"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 grid-rows-2 mt-28" id="imgs">
                        <img src="./img/logos/dark/9.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/10.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/11.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/12.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                    </div>
                </div>

                <div class="flex md:ml-16 ml-5 items-center" id="Software" data-aos="fade-up">
                    <div class="flex flex-col items-center">
                        <div class="absolute -rotate-90 transform-origin-bottom-left mt-52 mr-20" id="abilityName">
                            <span class="text-gray-400 italic dark:text-darkComment">SOFTWARES</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="h-5 w-5 bg-black rounded-full mt-24 dark:bg-darkWhite"></div>
                            <div class="bg-black w-1 h-52 dark:bg-darkWhite"></div>
                            <div class="h-5 w-5 bg-black rounded-full dark:bg-darkWhite"></div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 grid-rows-2 mt-28" id="imgs">
                        <img src="./img/logos/dark/5a.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/5.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/6.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                        <img src="./img/logos/dark/7.png" alt="" class="w-20 h-w-20 p-2 ml-2">
                    </div>
                </div>

            </div>

            <span class="flex md:hidden mt-20 font-semibold italic text-xl">Projects currently in progress.</span>

            <div class="grid grid-rows-2">

                <div class="flex items-center md:space-x-10 space-x-5" data-aos="fade-up">

                    <div class="mt-20">
                        <span class="font-bold">2023</span>
                        <span class="text-slate-500 dark:text-darkComment">Early June</span>
                    </div>
    
                    <div>
                        <div class="flex flex-col items-center">
                            <div class="h-5 w-5 bg-black rounded-full mt-24 dark:bg-darkWhite"></div>
                            <div class="bg-black w-1 h-52 dark:bg-darkWhite"></div>
                            <div class="h-5 w-5 bg-black rounded-full dark:bg-darkWhite"></div>
                        </div>
                    </div>
    
                    <div class="mt-20">
                        <span class="italic text-2xl">Project 1</span>
                        <br>
                        <span class="text-xl text-slate-500 dark:text-darkComment">Hello world</span>
                        <p class="mt-10 tracking-wide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda aperiam fugit fugiat molestiae, sit deleniti quaerat doloribus nemo possimus placeat ipsum neque consequuntur nostrum excepturi ducimus dolor temporibus nulla alias!</p>
                    </div>
    
                </div>

                <div class="flex items-center md:space-x-10 space-x-5" data-aos="fade-up">

                    <div class="mt-20">
                        <span class="font-bold">2023</span>
                        <span class="text-slate-500 dark:text-darkComment">Mid July</span>
                    </div>
    
                    <div>
                        <div class="flex flex-col items-center">
                            <div class="h-5 w-5 bg-black rounded-full mt-24 dark:bg-darkWhite"></div>
                            <div class="bg-black w-1 h-52 dark:bg-darkWhite"></div>
                            <div class="h-5 w-5 bg-black rounded-full dark:bg-darkWhite"></div>
                        </div>
                    </div>
    
                    <div class="mt-20">
                        <span class="italic text-2xl">Project 2</span>
                        <br>
                        <span class="text-xl text-slate-500 dark:text-darkComment">React App</span>
                        <p class="mt-10 tracking-wide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda aperiam fugit fugiat molestiae, sit deleniti quaerat doloribus nemo possimus placeat ipsum neque consequuntur nostrum excepturi ducimus dolor temporibus nulla alias!</p>
                    </div>
    
                </div>

                <div class="flex items-center md:space-x-10 space-x-5" data-aos="fade-up">

                    <div class="mt-20">
                        <span class="font-bold">2023</span>
                        <span class="text-slate-500 dark:text-darkComment">Late <br>
                        Aug</span>
                    </div>
    
                    <div>
                        <div class="flex flex-col items-center">
                            <div class="h-5 w-5 bg-black rounded-full mt-24 dark:bg-darkWhite"></div>
                            <div class="bg-black w-1 h-52 dark:bg-darkWhite"></div>
                            <div class="h-5 w-5 bg-black rounded-full dark:bg-darkWhite"></div>
                        </div>
                    </div>
    
                    <div class="mt-20">
                        <span class="italic text-2xl">Project 3</span>
                        <br>
                        <span class="text-xl text-slate-500 dark:text-darkComment">Cafe Store</span>
                        <p class="mt-10 tracking-wide">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda aperiam fugit fugiat molestiae, sit deleniti quaerat doloribus nemo possimus placeat ipsum neque consequuntur nostrum excepturi ducimus dolor temporibus nulla alias!</p>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="mt-36 text-center" data-aos="fade-right">
            <span class="italic text-base tracking-wider" style="font-family: firaCode;">"I enjoy learning new technologies every day, making things more beautiful."</span>
        </div>
    </div>

    <div id="extras" class="p-20">
        <section id="Portfolio">
            <div class="px-10 md:p-20 md:flex md:space-x-80">
                <div class="flex flex-col md:mt-48">
                    <div class="text-2xl">
                        Beyond the <span style="font-family: FiraCode;">lines of <span class="font-bold" data-aos="fade" data-aos-duration="500">code</span>,I'm a<span style="font-family: amster;" data-aos="fade" data-aos-duration="700"> visual storyteller </span>painting <span class="font-bold italic" data-aos="fade" data-aos-duration="900"> moments</span> along my <span style="font-family: bright;" data-aos="fade" data-aos-duration="1100"> Camera.</span>
                    </div>
                    <div id="explore" class="mt-20 md:mt-4 mb-20" style="font-family: Julius;" data-aos="fade-right">
                        <a href="" style="box-shadow: 0px 0px;">EXPLORE MORE <i class="fa-solid fa-chevron-right text-black dark:text-darkWhite" id="arrow"></i></a>
                    </div>
                </div>
                <div class="grid md:grid-cols-2" data-aos="fade-up">
                    <div id="imgContainer" class=" overflow-hidden">
                        <img src="https://images.pexels.com/photos/6956800/pexels-photo-6956800.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox  alt="img1" id="imgGal" class="cursor-pointer hover:scale-125 duration-300 dark:brightness-75">
                    </div>
                    <div id="imgContainer" class=" overflow-hidden">
                        <img src="https://images.pexels.com/photos/5083711/pexels-photo-5083711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox alt="img1" id="imgGal" class="cursor-pointer hover:scale-125 duration-300 dark:brightness-75">
                    </div>
                    <div id="imgContainer" class=" overflow-hidden">
                        <img src="https://images.pexels.com/photos/3230516/pexels-photo-3230516.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox alt="img1" id="imgGal" class="cursor-pointer hover:scale-125 duration-300 dark:brightness-75">
                    </div>
                    <div id="imgContainer" class=" overflow-hidden">
                        <img src="https://images.pexels.com/photos/8113850/pexels-photo-8113850.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-fancybox alt="img1" id="imgGal" class="cursor-pointer hover:scale-125 duration-300 dark:brightness-75">
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

     <div id="testimonial" class="p-20">
        <section id="testimonial">
            <h1 class="font-bold text-3xl md:mb-20 text-center" data-aos="fade-right">Testimonials</h1>
            <div class="justify-center">
                <div class="md:ml-52 md:mr-52 md:flex justify-center grid grid-cols-2 grid-rows-2 scale-75 md:scale-90">
                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="ssds" id="test0" class="rounded-full h-40 w-40 scale-75 duration-500 grayscale cursor-pointer m-5  hover:duration-1000 hover:shadow-3xl dark:hover:shadow-3dxl" 
                    onclick="runTestimonial(0)">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="ssds" id="test1" class="rounded-full h-40 w-40 scale-75 duration-500 grayscale cursor-pointer m-5  hover:duration-1000 hover:shadow-3xl dark:hover:shadow-3dxl" onclick="runTestimonial(1)">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="ssds" id="test2" class="rounded-full h-40 w-40 scale-75 duration-500 grayscale cursor-pointer m-5  hover:duration-1000 hover:shadow-3xl dark:hover:shadow-3dxl"
                    onclick="runTestimonial(2)">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="ssds" id="test3" class="rounded-full h-40 w-40 scale-75 duration-500 grayscale cursor-pointer m-5  hover:duration-1000 hover:shadow-3xl dark:hover:shadow-3dxl"
                    onclick="runTestimonial(3)">
                </div>
                <div class="text-center mt-10" data-aos="fade">
                    <div id="name" class="tracking-wider text-2xl" style="font-family: ANTIC;">    
                    </div>
                    <div class="md:pl-60 md:pr-60 tracking-widest mt-10 italic">
                        " <span id="testimonialContent">
                        </span> "
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <div id="contact" class="p-20">
        <section id="Contact">
            <div class="md:flex">
                <div class="md:w-1/2 text-3xl">
                    <span>Let's <span class="font-bold italic" data-aos="fade">Connect!</span></span>
                    <img src="https://images.pexels.com/photos/5467596/pexels-photo-5467596.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="hero" class="scale-75 dark:brightness-75">
                </div>
                <div class="grid justify-items-center md:w-1/2 md:mt-16">
                    <div class="grid md:grid-cols-2 md:ml-12 md:mt-32">
                        <input type="text" id="naam" placeholder="Tell us your name!" class="p-3 m-2 h-16  border-2 border-black rounded dark:bg-darkBG dark:text-darkWhite dark:border-darkComment" data-aos="zoom-in-left">
                        <input type="email" placeholder="Email" class="p-3 m-2 h-16  border-2 border-black rounded dark:bg-darkBG dark:text-darkWhite dark:border-darkComment" data-aos="zoom-in-left" id="email">
                        <input type="number" placeholder="Phone" class="p-3 m-2 h-16  border-2 border-black rounded dark:bg-darkBG dark:text-darkWhite dark:border-darkComment" data-aos="zoom-in-left" id="phone">
                        <select class="p-3 m-2 h-16  border-2 border-black rounded dark:bg-darkBG dark:text-darkWhite dark:border-darkComment" data-aos="zoom-in-left" id="purpose">
                            <option value="" disabled selected class="text-darkWhite">Purpose</option>
                            <option value="Work" class="text-darkWhite">Work</option>
                            <option value="Suggestion" class="text-darkWhite">Suggestion</option>
                        </select>
                        <textarea class="border-black m-2 h-16 border-2 p-3 rounded col-span-full dark:bg-darkBG dark:text-darkWhite dark:border-darkComment" data-aos="zoom-in-left" placeholder="Any special requests?" id="details"></textarea>
                    </div>
                    <button class="bg-darkBG p-3 px-10 mt-10 h-16 text-darkWhite font-bold italic text-lg hover:bg-darkWhite dark:bg-darkWhite dark:text-darkBG" id="btn" onclick="submitForm()">SUBMIT</button>
                </div>
            </div>
        </section>
    </div>

    <div id="footer" class="bg-black p-10 text-white dark:bg-darkBG dark:text-darkWhite">
        <div class=" grid md:grid-cols-2">
            <div class="md:w-1/2 mb-10">
                <h1 class="text-3xl tracking-wider mb-5" id="footerHead"><a href="login.php">AYUSH</a></h1>
                <P id="footerPara" class="tracking-wide">Student. Partime Photographer,Front-end Developer,Full-stack Enthusiast.</P>
            </div>
            <div class="mb-10 md:justify-self-end mr-10">
                <h1 class="text-3xl mb-5 tracking-wider" id="footerHead">SOCIAL</h1>
                <div id="socialIcons" class="flex space-x-5">
                    <a href=""><i class="fa-brands fa-linkedin-in" style="color: #ffffff;" id="socialIcon"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: #ffffff;" id="socialIcon"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter" style="color: #ffffff;" id="socialIcon"></i></a>
                    <a href=""><i class="fa-brands fa-instagram" style="color: #ffffff;" id="socialIcon"></i></a>
                    <a href=""><i class="fa-brands fa-youtube" style="color: #ffffff;" id="socialIcon"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center mt-5" id="footerPara">
            Made with ❤️ by <span class="italic">Ayush</span>
        </div>

    </div>


    <!-- scripts -->
    <script src="aos-master/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>AOS.init();</script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

    <script src="script.js"></script>
    <script>
        var typed = new Typed('#element', {
          strings: ['Visual Designer', 'Photographer','Web Developer'],
          typeSpeed: 100,
        });
        Fancybox.bind("[data-fancybox]", {});
    </script>
</body>
</html>