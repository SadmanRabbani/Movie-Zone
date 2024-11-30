<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Zone</title>
    <link rel="stylesheet" href="Style.css">

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>



    <!-- Navigation Bar -->
    <header>
        <a href="#" class="logo">
            <i class='bx bxs-movie'></i>Movie Zone
        </a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <!-- Menu -->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#movies">Movies</a></li>
            <li><a href="#upcoming">Coming</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>

        <a href="login.php" class="btn">Sign In</a>

    </header>



    <!-- Home -->

    <section class="home swiper" id="home">
        <div class="swiper-wrapper">

            <!-- Box 1 -->
            <div class="swiper-slide container">
                <img src="Images/home1.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: <br>Let There Be Cornage</h1>
                    <a href="#" class="btn">Watch Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="swiper-slide container">
                <img src="Images/home2.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avengers: <br> Infinity War</h1>
                    <a href="#" class="btn">Watch Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="swiper-slide container">
                <img src="Images/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man: <br> Far From Home</h1>
                    <a href="#" class="btn">Watch Now</a>
                    <a href="#" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination">

        </div>
    </section>



    <!-- Movies -->

    <section class="movies" id="movies">
        <h2 class="heading">Coming Up This Week</h2>

        <!-- Movies Container-->
        <div class="movies-container">

            <!-- Box 1 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m1.jpg" alt="">
                </div>

                <h3>Venom</h3>
                <span>120 min | Action, Thriller</span>
            </div>

            <!-- Box 2 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m2.jpg" alt="">
                </div>

                <h3>Dunkert</h3>
                <span>120 min | Adventure</span>
            </div>

            <!-- Box 3 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m3.jpg" alt="">
                </div>

                <h3>Batman vs Superman</h3>
                <span>120 min | Action, Thriller</span>
            </div>

            <!-- Box 4 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m4.jpg" alt="">
                </div>

                <h3>John Wick: Chapter 2</h3>
                <span>120 min | Thriller</span>
            </div>

            <!-- Box 5 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m5.jpg" alt="">
                </div>

                <h3>Aquaman</h3>
                <span>120 min | Action, Adventure</span>
            </div>

            <!-- Box 6 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m6.jpg" alt="">
                </div>

                <h3>Black Panther</h3>
                <span>120 min | Action, Adventure</span>
            </div>

            <!-- Box 7 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m7.jpg" alt="">
                </div>

                <h3>Thor</h3>
                <span>120 min | Action, Adventure</span>
            </div>

            <!-- Box 8 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m8.png" alt="">
                </div>

                <h3>BumbleBee</h3>
                <span>120 min | Adventure</span>
            </div>

            <!-- Box 9 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m9.jpg" alt="">
                </div>

                <h3>Mortal Engines</h3>
                <span>120 min | Action, Thriller</span>
            </div>

            <!-- Box 10 -->
            <div class="box">
                <div class="box-img">
                    <img src="Images/m10.jpg" alt="">
                </div>

                <h3>Underworld Blood Wars</h3>
                <span>120 min | Thriller, Adventure</span>
            </div>
        </div>
    </section>



    <!-- Upcoming Section -->

    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>

        <!-- Upcoming Container -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">

                <!-- Box 1 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming1.jpg" alt="">
                    </div>

                    <h3>Johnny English</h3>
                    <span>120 min | Action, Comedy</span>
                </div>

                <!-- Box 2 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming2.jpg" alt="">
                    </div>

                    <h3>Warcraft</h3>
                    <span>120 min | Adventure, Thriller</span>
                </div>

                <!-- Box 3 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming3.jpg" alt="">
                    </div>

                    <h3>Rampage</h3>
                    <span>120 min | Adventure, Thriller</span>
                </div>

                <!-- Box 4 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming4.jpg" alt="">
                    </div>

                    <h3>The Iron Lady</h3>
                    <span>120 min | Thriller</span>
                </div>

                <!-- Box 5 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming5.jpg" alt="">
                    </div>

                    <h3>Justice League</h3>
                    <span>120 min | Action, Thriller</span>
                </div>

                <!-- Box 6 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming6.jpeg" alt="">
                    </div>

                    <h3>Doctor Strange</h3>
                    <span>120 min | Action, Adventure</span>
                </div>

                <!-- Box 7 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming7.jpg" alt="">
                    </div>

                    <h3>Captain Marvel</h3>
                    <span>120 min | Action, Adventure</span>
                </div>

                <!-- Box 8 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming8.jpg" alt="">
                    </div>

                    <h3>Black Widow</h3>
                    <span>120 min | Action</span>
                </div>

                <!-- Box 9 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming9.jpg" alt="">
                    </div>

                    <h3>Ant Man</h3>
                    <span>120 min | Action, Thriller</span>
                </div>

                <!-- Box 10 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="Images/coming10.jpg" alt="">
                    </div>

                    <h3>Guardians Of The Galaxy</h3>
                    <span>120 min | Action, Adventure</span>
                </div>
            </div>
        </div>
    </section>



    <!-- Newsletter -->

    <section class="newsletter" id="newsletter"><br><br><br><br>
        <h2>Subscribe To Get <br>Newsletter</h2>
        <form action="Subscribe.php" method="post">
            <input type="email" name="Email" class="email" placeholder="Enter Email" required>
            <input type="submit" value="Subscribe" class="btn">
        </form>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>



    <!-- Footer -->

    <section class="footer">
        <a href="#" class="logo">
            <i class="bx bxs-movie"></i>Movie Zone
        </a>
        <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-tiktok"></i></a>
        </div>
    </section>



    <!-- Copyright -->

    <div class="Copyright">
        <p>&#169; Movie Zone All Right Reserved.</p>
    </div>




    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Applying JS To Home Section-->

    <script>
        var swiper = new Swiper(".home", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

        });
    </script>

    <!--Applying JS To Coming Section-->

    <script>
        //Swiper

        var swiper = new Swiper(".coming-container", {
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 55000,
                disableOnInteraction: false,
            },
            centeredSlides: true,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                568: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 4,
                },
                968: {
                    slidesPerView: 5,
                },
            },
        });
    </script>

    <!-- Applying JS for Header -->

    <script>
        let header = document.querySelector('header');

        window.addEventListener('scroll', () => {
            header.classList.toggle('shadow', window.scrollY > 0);
        });
    </script>



    <!-- Applying JS for Database -->



</body>

</html>