<?php
require("./components/header.php");
?>
<?php
require("./components/navigation.php");
?>
<!--==================== HOME ====================-->
<section class="home" id="home">
    <img src="assets/img/home1.jpg" alt="" class="home__img" />

    <div class="home__container container grid">
        <div class="home__data">
            <span class="home__data-subtitle">Discover your place</span>
            <h1 class="home__data-title">
                About Us
            </h1>
            <a href="#about" class="button">Explore</a>
        </div>

        <div class="home__social">
            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                <i class="ri-facebook-box-fill"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                <i class="ri-instagram-fill"></i>
            </a>
            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                <i class="ri-twitter-fill"></i>
            </a>
        </div>
    </div>
</section>

<!--==================== ABOUT ====================-->
<section class="about section" id="about">
    <div class="about__container container grid">
        <div class="about__data">
            <h2 class="section__title about__title">
                More Information <br />
                About The Best Beaches
            </h2>
            <p class="about__description">
                You can find the most beautiful and pleasant places at the best
                prices with special discounts, you choose the place we will guide
                you all the way to wait, get your place now.
            </p>
            <a href="listings.php" class="button">Reserve a place</a>
        </div>

        <div class="about__img">
            <div class="about__img-overlay">
                <img src="assets/img/about1.jpg" alt="" class="about__img-one" />
            </div>

            <div class="about__img-overlay">
                <img src="assets/img/about2.jpg" alt="" class="about__img-two" />
            </div>
        </div>
    </div>
</section>
<?php
require("./components/footer.php");
?>