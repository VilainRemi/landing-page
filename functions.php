<?php  
// ce fichier permet de centraliser toutes les functions utilitaires du projet
// il suffit de l'include sur une page pour y avoir accès 

/**
 * Fonction qui permet de récupérer un article via son index (id)
 *
 * @param $articleId numéro de l'article à récupérer 
 * @return array
 */
function getArticleById($articleId) {

    // on a besoin de la liste des articles 
    // Pour éviter qu'un fichier se perd lors de son appel on utilise le mot clé __DIR__ 
    include __DIR__ . "/data-article.php";

    // on récupére l'article depuis le tableau à l'aide de l'index stocké dans $articlesList
    $article = $articlesList[$articleId];

    // pour utiliser cet article hors de la fonction, on le renvoie grâce à return
    return $article;
}

?>