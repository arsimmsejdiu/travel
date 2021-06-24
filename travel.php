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
  <img src="assets/img/villas.jpg" alt="" class="home__img" />

  <div class="home__container container grid">
    <div class="home__data">
      <span class="home__data-subtitle">Discover your place</span>
      <?php
      $sql = new DB();
      $vid = $_GET['viewid'];
      $row = $sql->fetch_single($vid);

      if (!empty($row)) {

      ?>
        <h1 class="home__data-title"><?php echo $row['type']; ?></h1>
      <?php
      } else {
        echo "no data";
      }
      ?>

      <a href="#place" class="button">Explore</a>
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

<!--==================== EXPERIENCE ====================-->
<section class="experience section" id="place">
  <?php
  $sql = new DB();
  $vid = $_GET['viewid'];
  $row = $sql->fetch_single($vid);

  if (!empty($row)) {

  ?>
    <h1 class="section__title"><?php echo $row['type']; ?></h1>
  <?php
  } else {
    echo "no data";
  }
  ?>

  <div class="experience__container container grid">
    <div class="experience__content grid">
      <?php
      $sql = new DB();
      $vid = $_GET['viewid'];
      $row = $sql->fetch_single($vid);

      if (!empty($row)) {

      ?>
        <div class="experience__data">
          <h2 class="experience__number">$<?php echo $row['prix'] ?? 0; ?>/jour</h2>
          <!-- <span class="experience__description">Year <br />
          Experience</span> -->
        </div>
        <div class="experience__data">
          <h2 class="experience__number"><?php echo $row['lieu']; ?></h2>
          <!-- <span class="experience__description">Complete <br />
          tours</span> -->
        </div>
        <div class="experience__data">
          <h2 class="experience__number"><?php echo $row['personnes']; ?> Personnes</h2>
        </div>
        <div class="experience__data">
          <h2 class="experience__number"><?php echo $row['lits']; ?> Lits</h2>
        </div>
        <?php if ($row['type'] == 'Appartement') {
        ?>
          <div class="experience__data">
            <h2 class="experience__number"><?php echo $row['pieces']; ?> Pieces</h2>
          </div>
        <?php
        }
        ?>
        <?php if ($row['type'] == 'Maison') {
        ?>
          <div class="experience__data">
            <h2 class="experience__number"><?php echo $row['pieces']; ?> Pieces</h2>
          </div>
          <div class="experience__data">
            <h2 class="experience__number">Jardin <?php echo $row['jardin']; ?></h2>
          </div>
        <?php
        }
        ?>
        <?php if ($row['type'] == 'Villa') {
        ?>
          <div class="experience__data">
            <h2 class="experience__number"><?php echo $row['pieces']; ?> Pieces</h2>
          </div>
          <div class="experience__data">
            <h2 class="experience__number">Jardin <?php echo $row['jardin']; ?></h2>
          </div>
          <div class="experience__data">
            <h2 class="experience__number">Piscine <?php echo $row['piscine']; ?></h2>
          </div>
        <?php
        }
        ?>
        <div class="experience__data">
          <h2 class="experience__number">Disponible <?php echo $row['disponible']; ?></h2>
        </div>
      <?php
      } else {
        echo "no data";
      }
      ?>

    </div>
    <?php
    $sql = new DB();
    $vid = $_GET['viewid'];
    $row = $sql->fetch_single($vid);

    if (!empty($row)) {

    ?>
      <div class="experience__img grid">
        <div class="experience__overlay">
          <img src="assets/img/<?php echo $row['image']; ?>" alt="" class="experience__img-one" />
        </div>

        <div class="experience__overlay">
          <img src="assets/img/rooms.jpg" alt="" class="experience__img-two" />
        </div>
      </div>
    <?php
    } else {
      echo "no data";
    }
    ?>

    <?php
    $sql = new DB();
    $vid = $_GET['viewid'];
    $row = $sql->fetch_single($vid);

    if (!empty($row)) {

    ?>
      <br />
      <p class="about__description"> <?php echo $row['description']; ?></p>
    <?php
    } else {
      echo "no data";
    }
    ?>
    <a href="#place" class="button btn--show-modal">Book Now</a>
  </div>
</section>

<div class="modal hidden">
  <button class="btn--close-modal">&times;</button>
  <?php
  $sql = new DB();
  $vid = $_GET['viewid'];
  $row = $sql->fetch_single($vid);

  if (!empty($row)) {

  ?>
    <div class="modal__header">
      <div class="experience__content grid">
        <div class="experience__data">
          <h2 class="experience__number"><?php echo $row['type']; ?></h2>
          <!-- <span class="experience__description">Complete <br />
          tours</span> -->
        </div>
        <div class="experience__data">
          <h2 class="experience__number">$<?php echo $row['prix'] ?? 0; ?>/day</h2>
          <!-- <span class="experience__description">Year <br />
          Experience</span> -->
        </div>
        <div class="experience__data">
          <h2 class="experience__number"><?php echo $row['personnes'] ?? 0; ?> Personnes</h2>
        </div>
      </div>

    </div>
    <form method="POST" action="instr.php" class="modal__form">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" required/>
    <label>Check in</label>
    <input type="date" id="start" name="date" min='<?php echo date("Y-m-d"); ?>' value='<?php echo date("Y-m-d"); ?>' />
    <!-- <label>Check out</label>
    <input type="date" id="start" name="trip-start" min='<?php $date = new DateTime("+1 day");
                                                          echo $date->format("Y-m-d"); ?>' value='<?php $date = new DateTime("+1 day");
                                                                                                  echo $date->format("Y-m-d"); ?>' /> -->
    <!-- <label>Guests</label>
    <input type="number" id="tentacles" name="guests" min="1" max="100"> -->
    <label>First Name</label>
    <input type="firstname" name="prenom" />
    <label>Last Name</label>
    <input type="lastname" name="prenom" />
    <label>Email</label>
    <input type="email" name="mail" />
    <!-- <label>Total: <div id="total"></div></label> -->
    <button name="reserver" type="submit" class="button">Book</button>
  </form>
  <?php
  } else {
    echo "no data";
  }
  ?>
</div>
<div class="overlay hidden"></div>

<?php
require("./components/footer.php");
?>