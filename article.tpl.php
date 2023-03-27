<!-- fichier servant de template pour tous les articles -->

<article class="container__articles article__solo">
    <img src="<?= $article['picture']?>" alt="">
    <h2><?= $article['title']?></h2>
    <h3 class="container__subtitle"><?= $article['sub-title']?></h3>
    <p><?= $article['content']?></p>
    <a href="./index.php" class="container__article--a">Retour à l'acceuil</a>
</article>