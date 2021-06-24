<?php
require("./components/header.php");
?>

<?php
require("./components/navigation.php");
?>

<?php
include "./database/db.php";
?>

<!--==================== HOME ====================-->
<section class="home" id="home">
  <img src="assets/img/home1.jpg" alt="" class="home__img" />

  <div class="home__container container grid">
    <div class="home__data">
      <span class="home__data-subtitle">Discover your place</span>
      <h1 class="home__data-title">
        Explore The <br />
        Best
        <b>Beautiful <br />
          Places</b>
      </h1>
      <a href="#discover" class="button">Explore</a>
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


  <!--==================== DISCOVER ====================-->
  <section class="discover section" id="discover">
    <h2 class="section__title">
      Discover the most <br />
      attractive places
    </h2>

    <div class="discover__container container swiper-container">
      <div class="swiper-wrapper">
        <!--==================== DISCOVER 1 ====================-->
        <div class="discover__card swiper-slide">
          <img src="assets/img/discover1.jpg" alt="" class="discover__img" />
          <div class="discover__data">
            <h2 class="discover__title">Bali</h2>
            <span class="discover__description">24 tours available</span>
          </div>
        </div>

        <!--==================== DISCOVER 2 ====================-->
        <div class="discover__card swiper-slide">
          <img src="assets/img/discover2.jpg" alt="" class="discover__img" />
          <div class="discover__data">
            <h2 class="discover__title">Hawaii</h2>
            <span class="discover__description">15 tours available</span>
          </div>
        </div>

        <!--==================== DISCOVER 3 ====================-->
        <div class="discover__card swiper-slide">
          <img src="assets/img/discover3.jpg" alt="" class="discover__img" />
          <div class="discover__data">
            <h2 class="discover__title">Hvar</h2>
            <span class="discover__description">18 tours available</span>
          </div>
        </div>

        <!--==================== DISCOVER 4 ====================-->
        <div class="discover__card swiper-slide">
          <img src="assets/img/discover4.jpg" alt="" class="discover__img" />
          <div class="discover__data">
            <h2 class="discover__title">Whitehaven</h2>
            <span class="discover__description">32 tours available</span>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
require("./components/footer.php");
?>