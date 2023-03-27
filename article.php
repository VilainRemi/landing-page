<?php 
// on appelle ici le fichier contenant les fonctions utilitaires : 
include "./functions.php";

// on récupère depuis l'URL le paramètre GET "id", il représente le n° de l'article qu'on veut récupérer 
$articleId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

// on a besoin de l'article n° x 
$article = getArticleById($articleId);

// appel des templates qui construisent la page, à l'aide des données définies au dessus (template)
include __DIR__ . "/nav.tpl.php";
include __DIR__ . "/article.tpl.php";
include __DIR__ . "/footer.tpl.php";

?>