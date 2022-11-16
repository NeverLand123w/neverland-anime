<?php 

error_reporting(E_ALL ^ E_WARNING); 

$api = "https://anikatsu.shashankktiwari.repl.co";
$websiteTitle = "Neverland"; 
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = "/files/images/logo.png";
$contactEmail = "neverlandanime7@gmail.com";
$banner = $websiteUrl . "/files/images/logo.png";$parts=parse_url($_SERVER['REQUEST_URI']); 
$page_url=explode('/', $parts['path']);
$id = $page_url[count($page_url)-1];
//$id = "action";
$genre = str_replace("+", "-", $id);
$id = str_replace("+", " ", $id);
$id = ucfirst($id);
$page = $_GET['page']; 
if ($page == ""){
    $page = 1;
}
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>
        <?=$id?> on
        <?=$websiteTitle?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="<?=$id?> on <?=$websiteTitle?>">
    <meta name="description" content="Popular Anime in HD with No Ads. Watch anime online">
    <meta name="keywords"
        content="<?=$websiteTitle?>, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, <?=$websiteTitle?>, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa">
    <meta name="charset" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="en">
    <meta property="og:title" content="<?=$id?> on <?=$websiteTitle?>">
    <meta property="og:description" content="<?=$id?> on <?=$websiteTitle?> in HD with No Ads. Watch anime online">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=$websiteTitle?>">
    <meta itemprop="image" content="<?=$banner?>">
    <meta property="og:image" content="<?=$banner?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="twitter:card" content="summary">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        type="text/css">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/favicon.ico" />
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/style1.css">
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/min.css">
    <script type="text/javascript">
        setTimeout(function () {
            var wpse326013 = document.createElement('link');
            wpse326013.rel = 'stylesheet';
            wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css';
            wpse326013.type = 'text/css';
            var godefer = document.getElementsByTagName('link')[0];
            godefer.parentNode.insertBefore(wpse326013, godefer);
            var wpse326013_2 = document.createElement('link');
            wpse326013_2.rel = 'stylesheet';
            wpse326013_2.href = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css';
            wpse326013_2.type = 'text/css';
            var godefer2 = document.getElementsByTagName('link')[0];
            godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
        }, 500);
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
    <script></script>
    <style>
   .swiper-slide .item{
    float: left;
    width: calc(14.28% - 14px);
    margin: 0 7px 14px 7px;
    position: relative;
}
</style>
</head>

<body data-page="page_anime">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
        <?php include('../_php/header.php'); ?>
        <div class="clearfix"></div>
        <div class="container">
            <div id="main-wrapper">

            <div class="ab_-content">
                    <div class="anime_list anime_list-grid">

                       <div class="swiper-swipt" >
                         <?php 
                                $json = file_get_contents("$api/genre/$genre?page=$page");
                                $json = json_decode($json, true);
                                foreach($json as $key => $genreFetch) { ?>
                            <?php $title = $genreFetch['title']; { ?>
                            <div class="item" style="overflow:hidden;">
                                <div class="genere-hover" style="overflow:hidden;">
                                <a href="<?=$websiteUrl?>/anime/<?=$genreFetch['animeId']?>" class="anime_poster"
                                    title="<?=$title['romaji']?>">
                                    <img data-src="<?=$genreFetch['animeImg']?>" src="<<?=$genreFetch['animeImg']?>"
                                        class="anime_poster-img lazyload" alt="<?=$genreFetch['animeTitle']?>">
                                </a>
                                </div>
                                <div class="anime_detail">
                                    <h3 class="anime_name headingA1 text-cut"
                                        data-jname="<?=$genreFetch['animeTitle']?>"><a
                                            href="<?=$websiteUrl?>/anime/<?=$genreFetch['animeId']?>">
                                            <?=$genreFetch['animeTitle']?>
                                        </a></h3>
                                </div>
                            </div>
                            <?php } ?>
                         <?php } ?>
                       </div>
                            <div class="clearfix"></div>
                    </div>
                </div>


            </div>
            <div class="clearfix"></div>



            <div class="pagination">
                <nav>
                <ul class="ulclear az-list">
                        <?php 
                                               $genreFetchPage = file_get_contents("$api/genrePage?genre=$genre&page=$page");
                                               $genreFetchPage = json_decode($genreFetchPage, true); { ?>
                        <?=$genreFetchPage['pagination']; ?>
                        <?php } ?>
                </ul>
                </nav>
            </div>



        </div>
        <div id="mask-overlay"></div>
        <?php include('../_php/footer.php'); ?>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script type="text/javascript" src="<?=$websiteUrl?>/files/js/app.js"></script>
    <script type="text/javascript" src="<?=$websiteUrl?>/files/js/comman.js"></script>
    <script type="text/javascript" src="<?=$websiteUrl?>/files/js/movie.js"></script>
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="<?=$websiteUrl?>/files/js/function.js"></script>

    <div style="display:none;">
    </div>
    </div>
</body>

</html>