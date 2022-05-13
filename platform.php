<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platforms | DSAlgo</title>
 
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
    <div class="heading" style="background: url(images/header/h-1.jpeg) no-repeat;">
        <h1>coding platforms</h1>
    </div>

    <!-- =========packages section starts========== -->
    <section class="packages">
        <h1 class="heading-title"> platforms to practice your skills </h1>

        <div class="box-container">
            <div data-aos="fade-left" class="box">
                <div class="image">
                    <img src="images/platforms/gg.png" alt="">
                </div>
                <div class="content">
                    <h3>geekforgeeks</h3>
                    <p>Geeks Coding Challenge (GCC) is a 3-day coding contest organized by GeeksforGeeks (one of the leading website in the Computer Science domain!). The contest is conducted online where you can solve various coding problems and can compete with other programmers online.</p>
                    <a target="_blank" href="https://www.geeksforgeeks.org/data-structures/?ref=shm" class="btn">go to</a>

                </div>
            </div>

            <div data-aos="fade-left" class="box">
                <div class="image">
                    <img src="images/platforms/lc-1.png" alt="">
                </div>
                <div class="content">
                    <h3>leetcode</h3>
                    <p>LeetCode is the leading platform that offers various coding challenges to enhance your coding skills. It offers various weekly and biweekly programming competitions for the participants.The contests are generally of a duration of 90 minutes. You can solve the challenges in their own online editor (named as Playground) in any one of the supported programming languages</p>
                    <a target="_blank" href="https://leetcode.com/problemset/all/" class="btn">go to</a>
                </div>
            </div>

            <div data-aos="fade-left" class="box">
                <div class="image">
                    <img src="images/platforms/cc.png" style="border-bottom: var(--border) !important;" alt="">
                </div>
                <div class="content">
                    <h3>codechef</h3>
                    <p>CodeChef is a competitive programming website that offers several challenges for aspiring programmers to practice and sharpen their programming skills through various online contests. CodeChef conducts a programming competition at the start of every month and also conducts 2 smaller programming contests at the middle and end of the month.</p>
                    <a target="_blank" href="https://www.codechef.com/practice?itm_medium=navmenu&itm_campaign=practice" class="btn">go to</a>
                </div>
            </div>

            <div data-aos="fade-right" class="box">
                <div class="image">
                    <img src="images/platforms/hr.png" alt="">
                </div>
                <div class="content">
                    <h3>HackerRank</h3>
                    <p>HackerRank is a leading platform for competitive programming challenges where you have to solve the problems as per the given specifications. HackerRank offers you to solve these programming challenges in any of various programming languages such as C, Java, Python, Ruby, etc</p>
                    <a target="_blank" href="https://www.hackerrank.com/domains/data-structures" class="btn">go to</a>
                </div>
            </div>

            <div data-aos="fade-right" class="box">
                <div class="image">
                    <img src="images/platforms/spoj.gif" style="border-bottom: var(--border);" alt="">
                </div>
                <div class="content">
                    <h3>SPOJ</h3>
                    <p>SPOJ (Sphere Online Judge) is an online judge system with over 315,000 registered users and over 20,000 problems. Tasks are prepared by its community of problem setters or are taken from previous programming contests. SPOJ allows advanced users to organize contests under their own rules and also includes a forum where programmers can discuss how to solve a particular problem.</p>
                    <a target="_blank" href="https://www.spoj.com/problems/classical/" class="btn">go to</a>
                </div>
            </div>

            <div data-aos="fade-right" class="box">
                <div class="image">
                    <img src="images/platforms/cf.png" style="border-bottom: var(--border);" alt="">
                </div>
                <div class="content">
                    <h3>Codeforces</h3>
                    <p>Codeforces is a Russian website that hosts competitive programming competitions where the number of competitive coders across the world competes with each other. The contests conducted by Codeforces allow you to write solutions to the problems that are tested during the contest.</p>
                    <a target="_blank" href="https://codeforces.com/problemset" class="btn">go to</a>
                </div>
            </div>


        </div>

        <div class="load-more"><span class="btn">load more...</span> </div>

    </section>
    <!-- =========packages section ends========== -->


    <?php @include '_footer.php'; ?>