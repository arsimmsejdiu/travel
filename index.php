<?php
require("./components/header.php");
?>

<?php
require("./components/navigation.php");
?>

<?php
session_start();
include "./database/db.php";
?>

<main class="main">
  <!--==================== HOME ====================-->
  <section class="home" id="home">
    <img src="assets/img/house.jpg" alt="" class="home__img" />

    <div class="home__container container grid">
      <div class="home__data">
        <span class="home__data-subtitle">Discover your place</span>
        <h1 class="home__data-title">
          Explore The <br />
          Best
          <b>Beautiful <br />
            Places</b>
        </h1>

      </div>
      <form method="POST" action="search.php" class="subscribe__form">
        <input type="search" name="recherche" placeholder="Search Places" class="subscribe__input" />
        <button name="submit" value="Rechercher" class="button">Search</button>
      </form>

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

  <!--==================== PLACES ====================-->
  <section class="place section" id="place">
    <h2 class="section__title">Choose Your Place</h2>

    <div class="place__container container grid">
      <!--==================== PLACES CARD 1 ====================-->
      <?php
      $ret = new DB();
      $rows = $ret->fetch();
      if (!empty($rows)) {
        foreach ($rows as $row) {
      ?>
          <div class="place__card">
            <img src="assets/img/<?php echo $row['image']; ?>" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title"><?php echo $row['type']; ?></h3>
                <span class="place__subtitle"><?php echo $row['lieu']; ?></span>
                <span class="place__price">$<?php echo $row['prix']; ?></span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <a class="book" href="travel.php?viewid=<?php echo htmlentities($row['id']) ?>">Book</a>
            </button>
          </div>
        <?php
          // $cnt = $cnt + 1;
        }
      } else { ?>
        <p style="text-align:center; color:red;" colspan="6">No Record Found</p>
      <?php } ?>
    </div>
  </section>


  <!--==================== VIDEO ====================-->
  <section class="video section">
    <h2 class="section__title">Video Tour</h2>

    <div class="video__container container">
      <p class="video__description">
        Find out more with our video of the most beautiful and pleasant
        places for you and your family.
      </p>

      <div class="video__content">
        <video id="video-file">
          <source src="assets/video/video.mp4" type="video/mp4" />
        </video>

        <button class="button button--flex video__button" id="video-button">
          <i class="ri-play-line video__button-icon" id="video-icon"></i>
        </button>
      </div>
    </div>
  </section>

  <!--==================== SUBSCRIBE ====================-->
  <section class="subscribe section">
    <div class="subscribe__bg">
      <div class="subscribe__container container">
        <h2 class="section__title subscribe__title">
          Subscribe Our <br />
          Newsletter
        </h2>
        <p class="subscribe__description">
          Subscribe to our newsletter and get a special 30% discount.
        </p>

        <form action="" class="subscribe__form">
          <input type="text" placeholder="Enter email" class="subscribe__input" />
          <button class="button">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!--==================== SPONSORS ====================-->
  <section class="sponsor section">
    <div class="sponsor__container container grid">
      <div class="sponsor__content">
        <img src="assets/img/sponsors1.png" alt="" class="sponsor__img" />
      </div>
      <div class="sponsor__content">
        <img src="assets/img/sponsors2.png" alt="" class="sponsor__img" />
      </div>
      <div class="sponsor__content">
        <img src="assets/img/sponsors3.png" alt="" class="sponsor__img" />
      </div>
      <div class="sponsor__content">
        <img src="assets/img/sponsors4.png" alt="" class="sponsor__img" />
      </div>
      <div class="sponsor__content">
        <img src="assets/img/sponsors5.png" alt="" class="sponsor__img" />
      </div>
    </div>
  </section>
</main>

<?php
require("./components/footer.php");
?>