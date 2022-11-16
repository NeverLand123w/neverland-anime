<?php 
$api = "https://anikatsu.shashankktiwari.repl.co";
$websiteTitle = "Neverland"; 
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = "/files/images/logo.png";
$contactEmail = "neverlandanime7@gmail.com";
$banner = $websiteUrl . "/files/images/logo.png";
$getAnime = file_get_contents("https://api.consumet.org/meta/anilist/random-anime");
$getAnime = json_decode($getAnime, true);
$id = $getAnime['id'];
$newURL = "$websiteUrl/anilist/anime?id=$id";
header('Location: '.$newURL);
?>