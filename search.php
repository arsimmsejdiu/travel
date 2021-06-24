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
      <h1 class="home__data-title">
        Explore The <br />
        Best
        <b>Beautiful <br />
          Places</b>
      </h1>
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
    <div class="home__info">
      <div>
        <span class="home__info-title">Best places to visit</span>
        <a href="#place" class="button button--flex button--link home__info-button">
          More <i class="ri-arrow-right-line"></i>
        </a>
      </div>

      <div class="home__info-overlay">
        <img src="assets/img/villas.jpg" alt="" class="home__info-img" />
      </div>
    </div>
  </div>
</section>

<!--==================== PLACES ====================-->
<section class="place section" id="place">
  <h2 class="section__title">Voici le résultat de votre recherche</h2>


  <!--==================== PLACES CARD 1 ====================-->
  <?php
  function affichageGites($res)
  {
    foreach ($res as $row) {
  ?>
      <div class="place__container container grid">
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
      </div>
  <?php
    }
  } ?>

</section>

<?php
$dns = "mysql:host=localhost;dbname=projet5;charset=utf8";
$pdo = new PDO($dns, "root", "NejeL8");

$recherche = $_POST['recherche'];
$query = $pdo->query("SELECT * FROM gites WHERE lieu LIKE '%$recherche%' AND disponible = 'oui'");
if ($query != 'false') {
  $res = $query->fetchAll();
  if (!empty($res))
    affichageGites($res);
  else
    echo "<p>Aucun gîte n'est disponible à la location actuellement...</p>";
} else {
  echo "<p>Erreur interne</p>";
}
?>

<?php
require("./components/footer.php");
?>