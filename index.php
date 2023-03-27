<?php 
// j'importe le fichier data-Article.php pour avoir accès à mon tableau d'articles
include "./data-article.php";
?>
<?php
// je récupère mon template de navbar  
include "./nav.tpl.php";
?>

    <div class="container__up">
      <div class="container__left">
        <h1 class="container__left--title">Maximisez vos compétences, minimisez votre budget</h1>
        <p class="container__left--paragraph"> Nos cours modernes couvrant une gamme de compétences recherchées vous donneront les connaissances dont vous avez besoin pour vivre la vie que vous souhaitez.</p>
        <button type="submit" class="container__left--button">Commencer</button>
      </div>
    <div class="container__right">
      <img class="container__right--image" src="./starter-code/assets/image-hero-desktop@2x.webp" alt="image d'une femme qui boit son café devant un ordinateur">
      <img class="container__right--image--mobile" src="./starter-code/assets/image-hero-mobile@2x.webp" alt="oéoé">
    </div>
  </div>
  <section class="container__down">

  <div class="container__article1"><h2>Nos cours les plus populaires !</h2></div>
    <?php 
      foreach ($articlesList as $numeroArticle => $articleCourant) :
    ?>
    <article class="container__articles">
        <img src="<?= $articleCourant['picture']?>" alt="petit logo">
        <h2><?= $articleCourant['title'] ?></h2>
        <p><?= substr($articleCourant['content'], 0, 100) . '...' ?></p>
        <a href="article.php?id=<?= $numeroArticle ?>" class="container__article--a">Commencer</a>
    </article>

    <?php endforeach ?>
   <!--  <article class="container__article1"><p>Nos cours les plus <br> populaires !</p></article>
    <article class="container__article2"><img class="container__article--img" src="./starter-code/assets/icon-animation.svg" alt="logo"><h2>Animation</h2><p class="container__article--p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, reiciendis nulla corrupti asperiores quod est! Ea magnam amet obcaecati eligendi!</p><a class="container__article--a" href="#">Commencer</a></article>
    <article class="container__article3"><img class="container__article--img" src="./starter-code/assets/icon-business.svg" alt="logo"><h2>Business</h2><p class="container__article--p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, reiciendis nulla corrupti asperiores quod est! Ea magnam amet obcaecati eligendi!</p><a class="container__article--a" href="#">Commencer</a></article>
    <article class="container__article4"><img class="container__article--img" src="./starter-code/assets/icon-crypto.svg" alt="logo"><h2>Crypto</h2><p class="container__article--p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, reiciendis nulla corrupti asperiores quod est! Ea magnam amet obcaecati eligendi!</p><a class="container__article--a" href="#">Commencer</a></article>
    <article class="container__article5"><img class="container__article--img" src="./starter-code/assets/icon-design.svg" alt="logo"><h2>Design</h2><p class="container__article--p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, reiciendis nulla corrupti asperiores quod est! Ea magnam amet obcaecati eligendi!</p><a class="container__article--a" href="#">Commencer</a></article>
    <article class="container__article6"><img class="container__article--img" src="./starter-code/assets/icon-photography.svg" alt="logo"><h2>Photograpie</h2><p class="container__article--p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, reiciendis nulla corrupti asperiores quod est! Ea magnam amet obcaecati eligendi!</p><a class="container__article--a" href="#">Commencer</a></article> -->
 </section>
</div>
</main>

<?php 

include "./footer.tpl.php";

?>

</body>


