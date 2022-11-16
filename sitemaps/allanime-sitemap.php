<?php
error_reporting(E_ALL ^ E_WARNING); 

$page = $_GET['page']; 
if ($page == ""){
    $page = 1;
}
$api = "https://anikatsu.shashankktiwari.repl.co";
$websiteTitle = "Neverland"; 
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = "/files/images/logo.png";
$contactEmail = "neverlandanime7@gmail.com";
$banner = $websiteUrl . "/files/images/logo.png";

header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";

$json = file_get_contents("$api/animeList?page=$page");
$json = json_decode($json, true);
foreach($json as $getAllAnime) 
{  
    echo "<url>";
    echo "<loc>https://{$_SERVER['SERVER_NAME']}/anime/".$getAllAnime['animeId']."</loc>";
    echo "<changefreq>daily</changefreq>";
    echo "<priority>0.8000</priority>";
    echo "</url>";
}

echo "</urlset>";

?>