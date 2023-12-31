<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section start  -->

    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <button id="menu-btn" class="fas fa-bars"></button>
    </section>
    <!-- header section  ends  -->

    <!-- home section starts  -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide1.jpg) no-repeat">
                    <div class="content">
                        <span>explorer, discover, travel</span>
                        <h3>Travel Around The World</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide2.jpg) no-repeat">
                    <div class="content">
                        <span>explorer, discover, travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide3.jpg) no-repeat">
                    <div class="content">
                        <span>explorer, discover, travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends  -->



    <!-- services section starts  -->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/travel.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/tour-guide.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/trekking.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/fire.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/off-road.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/camping.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends  -->

    <!-- home about section starts  -->
    <section class="home-about">
        <div class="image">
            <img src="images/home-about.jpeg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, sunt commodi. Id, quas corporis
                commodi atque unde ea provident tempora a pariatur et tempore sed praesentium incidunt aliquid. Nam,
                laboriosam.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section ends  -->

    <!-- home packages section starts  -->
    <section class="home-packages">
        <h1 class="heading-title"> our packages</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/package1-image.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, exercitationem.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/package2-image.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, exercitationem.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/package3-image.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, exercitationem.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>
        <div class="load-more"> <a href="book.php" class="btn">load more</a> </div>
    </section>
    <!-- home packages section ends  -->

    <!-- home offer section starts  -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae quam autem cupiditate eius sed
                eveniet nisi labore sequi fugit odit.</p>
                <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends  -->
















    <!-- footer section start  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+4-0700-000-000</a>
                <a href="#"><i class="fas fa-phone"></i>+4-0700-000-000</a>
                <a href="#"><i class="fas fa-envelope"></i>contact@travel.com</a>
                <a href="#"><i class="fas fa-map"></i> Cluj, Cluj-Napocs</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>

            </div>
        </div>
        <div class="credit">created by <span> Alex</span> | all roghts reserved</div>
    </section>
    <!-- footer section end  -->

    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>