<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

    <div class="heading" style="background:url(images/heading-img.jpeg) no-repeat">
        <h1>about us</h1>
    </div>

    <!-- about section starts  -->
    <section class="about">
        <div class="image">
            <img src="images/about-image.jpeg" alt="">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe inventore ipsam nesciunt dolor ipsum amet
                excepturi deserunt. Sint, labore incidunt commodi consequuntur alias esse nulla? Fuga eveniet id in?
                Consequatur.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi omnis totam nam labore mollitia
                voluptates, quae exercitationem accusantium recusandae consequuntur? Culpa vel ea cum harum unde
                repellendus voluptatum id nam.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>

                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>affordable price</span>
                </div>

                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends  -->

    <!-- reviews section starts -->
    <section class="reviews">

        <h1 class="heading-title">clients reviews</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae iure explicabo sequi,
                        adipisci ducimus ipsa recusandae. Nemo, ea accusamus, velit est vitae doloremque veritatis quas
                        quam, ab animi deserunt numquam.</p>
                    <h3>Mikel</h3>
                    <span>traveler</span>
                    <img src="images/review1-image.jpeg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ratione atque quam officia optio
                        adipisci nam voluptatum itaque incidunt iure laborum delectus, et ut exercitationem obcaecati
                        veniam iste error eaque?
                    </p>
                    <h3>Emma</h3>
                    <span>traveler</span>
                    <img src="images/review2-image.jpeg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ratione atque quam officia optio
                        adipisci nam voluptatum itaque incidunt iure laborum delectus, et ut exercitationem obcaecati
                        veniam iste error eaque?
                    </p>
                    <h3>Evelyn</h3>
                    <span>traveler</span>
                    <img src="images/review3-image.jpeg" alt="">
                </div>
                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste qui error minus. Recusandae, vel
                        temporibus.
                    </p>
                    <h3>Allice</h3>
                    <span>traveler</span>
                    <img src="images/review4-image.jpeg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sunt. Corrupti assumenda veniam
                        tempora beatae culpa quam, hic sequi perferendis facere, minima amet nobis molestias a,
                        blanditiis quis modi repellat quisquam recusandae neque accusamus deleniti!
                    </p>
                    <h3>Jack</h3>
                    <span>traveler</span>
                    <img src="images/review5-image.jpeg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel cumque, iure voluptas deleniti
                        corrupti nam. Vel alias eveniet quidem nam!
                    </p>
                    <h3>Mia</h3>
                    <span>traveler</span>
                    <img src="images/review6-image.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- review section ends -->













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