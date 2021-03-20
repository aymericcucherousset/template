<?php  
session_start();
require('assets/php/functions.php');
require('assets/php/link_bdd.php');

// Routeur

$url = "";
if(isset($_GET['url'])){
    $url = htmlspecialchars($_GET['url']);
    $url = explode('/', $url);
}

if($url[0] == ''){
    require('pages/home.php');
}elseif($url[0] == 'article' AND !empty($url[1])){
    $idArticle = $url[1];
    if (isInteger($idArticle)) {
        require('pages/article.php');
    }else {
        require('pages/404.php');
    }
    
}else {
    require('pages/404.php');
}


?>   