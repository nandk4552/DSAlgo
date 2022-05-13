<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | DSAlgo</title>
    <!-- aos cdn link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div id="preloader"></div>

    <?php @include '_header.php'; ?>


    <!-- =======home section starts========== -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="slide swiper-slide " style="background: url(images/banner/hb-9.png) no-repeat;">
                    <div class="content">
                        <span>Eat, sleep, code, repeat</span>
                        <!-- <h3>First, solve the problem. Then, write the code.</h3> -->
                        <h3>where to learn</h3>
                        <a href="from_youtube" class="btn">discover more</a>
                    </div>
                </div>

                <div class="slide swiper-slide " style="background: url(images/banner/hb-10.jpg) no-repeat;">
                    <div class="content">
                        <span>Eat, sleep, code, repeat</span>
                        <h3>coding platforms</h3>
                        <a href="platform" class="btn">discover more</a>
                    </div>
                </div>

                <div class="slide swiper-slide " style="background: url(images/banner/hb-3.jpeg) no-repeat;">
                    <div class="content">
                        <span>Eat, sleep, code, repeat</span>
                        <h3>start your journey now</h3>
                        <a href="from_youtube" class="btn">discover more</a>
                    </div>
                </div>



            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <!-- =======home section ends========== -->


    <!-- =======home offers section starts========== -->
    <section data-aos="fade-up" class="home-offer">
        <div class="content">
            <h3>why data structure and algorithms?</h3>
            <p>Data structure and algorithms help in understanding the nature of the problem at a deeper level and thereby a better understanding of the world.</p>
            <a target="_blank" href="https://youtu.be/V5he1JXiQbg" class="btn">Watch Now</a>
        </div>
    </section>
    <!-- =======home offers section ends========== -->


    <!-- =======service section starts========== -->
    <section data-aos="fade-up" class="services">

        <h1 class="heading-title"> where to learn </h1>
        <div class="box-container">
            <a href="from_youtube">
                <div class="box">
                    <i class="fab fa-youtube fa-3x"></i>
                    <h3>from youTube</h3>
                </div>
            </a>
            <a href="platform">
                <div class="box">
                    <i class="fas fa-code fa-3x"></i>
                    <h3>codding websites</h3>
                </div>
            </a>

            <a href="platform">
                <div class="box">
                    <i class="fa-solid fa-computer fa-3x"></i>
                    <h3>practice</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <i class="fa-solid fa-book-open-reader fa-3x"></i>
                    <h3>self learning</h3>
                </div>
            </a>

            <a href="guide">
                <div class="box">
                    <i class="fa-solid fa-sheet-plastic fa-3x"></i>
                    <h3>SDE SHEETS</h3>
                </div>
            </a>

        </div>

    </section>
    <!-- =======service section ends========== -->


    <section class="based_company">
        <div class="box-container">
            <h1 class="heading-title">Main concepts:</h1>
            <div data-aos="fade-right" class="box">
                <h2 class="h-title">Service based Companies:</h2>
                <ul>
                    <li>Language basics (Java/C++/Python)</li>
                    <li>Arrays/2D Arrays</li>
                    <li>Strings</li>
                    <li>Searching & Sorting</li>
                    <li>Linked List</li>
                    <li>Stacks & Queues</li>
                    <li>Trees/BST</li>
                    <li>Basic Graphs</li>
                </ul>
            </div>

            <div data-aos="fade-left" class="box">
                <h2 class="h-title">Product based Companies:</h2>
                <ul>
                    <li>Language basics (Java/C++/Python)</li>
                    <li>Arrays/2D Arrays</li>
                    <li>Strings</li>
                    <li>Searching & Sorting</li>
                    <li>Linked List</li>
                    <li>Stacks & Queues</li>
                    <li>Trees/BST</li>
                    <li>Graphs</li>
                    <li>Dynamic Programming</li>
                    <li>Tries</li>
                    <li>Segment Trees (basic)</li>
                    <li>Bit Manipulation</li>
                </ul>
            </div>













        </div>
    </section>



    <!-- =======home packages section starts========== -->

    <section class="home-packages">

        <h1 class="heading-title"> coding platforms </h1>

        <div data-aos="fade-right" class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/platforms/gg.png" alt="">
                </div>
                <div class="content">
                    <h3>geekforgeeks</h3>
                    <p>Geeks Coding Challenge (GCC) is a 3-day coding contest organized by GeeksforGeeks (one of the leading website in the Computer Science domain!). The contest is conducted online where you can solve various coding problems and can compete with other programmers online.</p>
                    <a target="_blank" href="https://www.geeksforgeeks.org/data-structures/?ref=shm" class="btn">go to</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/platforms/lc-1.png" alt="">
                </div>
                <div class="content">
                    <h3>leetcode</h3>
                    <p>LeetCode is the leading platform that offers various coding challenges to enhance your coding skills. It offers various weekly and biweekly programming competitions for the participants.The contests are generally of a duration of 90 minutes. You can solve the challenges in their own online editor (named as Playground) in any one of the supported programming languages</p>
                    <a target="_blank" href="https://leetcode.com/problemset/all/" class="btn">go to</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/platforms/cc.png" style="border-bottom: var(--border) !important;" alt="">
                </div>
                <div class="content">
                    <h3>codechef</h3>
                    <p>CodeChef is a competitive programming website that offers several challenges for aspiring programmers to practice and sharpen their programming skills through various online contests. CodeChef conducts a programming competition at the start of every month and also conducts 2 smaller programming contests at the middle and end of the month.</p>
                    <a target="_blank" href="https://www.codechef.com/practice?itm_medium=navmenu&itm_campaign=practice" class="btn">go to</a>
                </div>
            </div>


        </div>

        <div class="load-more"> <a href="platform" class="btn">load more...</a> </div>

    </section>

    <!-- =======home packages section ends========== -->
    <!-- =======home about section starts========== -->
    <section  data-aos="fade-left" class="home-about">

        <div class="image">
            <img src="images/about/about-1.png" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>When you have a crack an interview...? How product or service based companies tends to ask DSA questions...? Most of the begginers doesn't know where to start. We try to provide a step by step process to Learn DSA and apply on complex problems using DSA. We are trying to give guidance for begginers to advance level users to learn and practice DSA questions to crack a interview.... 
    <br>
            DSAlgo provides guidance to where to pratice the gained knowledge from Free sources.</p>
            <a href="about" class="btn">read more</a>
        </div>

    </section>
    <!-- =======home about section ends========== -->





    <?php @include '_footer.php'; ?>