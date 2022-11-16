<?php 
$api = "https://anikatsu.shashankktiwari.repl.co";
$websiteTitle = "Neverland"; 
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = "/files/images/logo.png";
$contactEmail = "neverlandanime7@gmail.com";
$banner = $websiteUrl . "/files/images/logo.png";$parts=parse_url($_SERVER['REQUEST_URI']); 
$page_url=explode('/', $parts['path']);
$url = $page_url[count($page_url)-1];
//$url = "naruto-episode-2";
$getEpisode = file_get_contents("$api/getEpisode/$url");
$getEpisode = json_decode($getEpisode, true);
$anime = $getEpisode['anime_info'];
$download = str_replace("Gogoanime", "$websiteTitle", $getEpisode['ep_download']);

$getAnime = file_get_contents("$api/getAnime/$anime");
$getAnime = json_decode($getAnime, true);
$episodelist = $getAnime['episode_id'];

?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Watch
        <?=$getEpisode['animeNameWithEP']?>on
        <?=$websiteTitle?>
    </title>
    <script async src="https://arc.io/widget.min.js#VtsaVyfg"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Watch <?=$getEpisode['animeNameWithEP']?>on <?=$websiteTitle?>">
    <meta name="description" content="<?=substr($getAnime['synopsis'],0, 150)?> ... at <?=$websiteUrl?>">
    <meta name="keywords"
        content="<?=$websiteTitle?>, <?=$getEpisode['animeNameWithEP']?>,<?=$getAnime['othername']?><?=$getAnime['name']?>, watch anime online, free anime, anime stream, anime hd, english sub">
    <meta name="charset" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="en">
    <meta property="og:title" content="Watch <?=$getEpisode['animeNameWithEP']?>on <?=$websiteTitle?>">
    <meta property="og:description" content="<?=substr($getAnime['synopsis'],0, 150)?> ... at <?=$websiteUrl?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=$websiteTitle?>">
    <meta property="og:url" content="<?=$websiteUrl?>/anime/<?=$url?>">
    <meta itemprop="image" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image" content="<?=$getAnime['imageUrl']?>">
    <meta property="twitter:title" content="Watch <?=$getEpisode['animeNameWithEP']?>on <?=$websiteTitle?>">
    <meta property="twitter:description" content="<?=substr($getAnime['synopsis'],0, 150)?> ... at <?=$websiteUrl?>">
    <meta property="twitter:url" content="<?=$websiteUrl?>/anime/<?=$url?>">
    <meta property="twitter:card" content="summary">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63430163bc99824a"></script>
    <meta name="theme-color" content="#202125">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        type="text/css">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/favicon.ico" />
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/style.css">
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/min.css">
</head>

<body data-page="movie_watch">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="movie_watch">
        <?php include('_php/header.php');?>
        <div class="clearfix"></div>
        <div class="main-mainest_wrap">
            <div id="main-wrapper" date-page="movie_watch" data-id="">
                <div id="ani_detail">
                    <div class="ani_detail-stage">
                        <div class="container">
                            <div class="anis-cover-wrap">

                            </div>
                            <div class="anis-watch-wrap">
                                <div class="prebreadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                                                <a itemprop="item" href="/"><span itemprop="name">Home</span></a>
                                                <meta itemprop="position" content="1">
                                            </li>
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                                                <a itemprop="item" href="/anime"><span itemprop="name">Anime</span></a>
                                                <meta itemprop="position" content="2">
                                            </li>
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem" class="breadcrumb-item"
                                                aria-current="page">
                                                <a itemprop="item" href="/anime/<?=$anime?>"><span itemprop="name">
                                                        <?=$getAnime['name']?>
                                                    </span></a>
                                                <meta itemprop="position" content="3">
                                            </li>
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem" class="breadcrumb-item"
                                                aria-current="page">
                                                <a itemprop="item" href="<?=$websiteUrl?>/watch/<?=$url?>"><span
                                                        itemprop="name">Episode
                                                        <?=$getEpisode['ep_num']?>
                                                    </span></a>
                                                <meta itemprop="position" content="4">
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                                <div class="anis-watch anis-watch-tv">
                                    <div class="watch-player">
                                        <div class="player-frame">
                                            <div class="loading-relative loading-box" id="embed-loading">
                                                <div class="loading">
                                                    <div class="span1"></div>
                                                    <div class="span2"></div>
                                                    <div class="span3"></div>
                                                </div>

                                            </div>
                                            <iframe name="iframe-to-load"
                                                src="<?=$websiteUrl?>/player/v1.php?id=<?=$url?>" frameborder="0"
                                                scrolling="no"
                                                allow="accelerometer;encrypted-media;gyroscope;picture-in-picture"
                                                allowfullscreen="true" autoplay="false" webkitallowfullscreen="true"
                                                mozallowfullscreen="true"></iframe>
                                        </div>
                                        <div class="player-controls">
                                            <div class="pc-item pc-resize">
                                                <a href="javascript:;" id="media-resize" class="btn btn-sm"><i
                                                        class="fas fa-expand mr-1"></i>Expand</a>
                                            </div>
                                            <div class="pc-item pc-toggle pc-light">
                                                <div id="turn-off-light" class="toggle-basic">
                                                    <span class="tb-name"><i
                                                            class="fas fa-lightbulb mr-2"></i>Light</span>
                                                    <span class="tb-result"></span>
                                                </div>
                                            </div>
                                            <div class="pc-item pc-download">
                                                <a class="btn btn-sm pc-download" href="<?=$download?>"
                                                    target="_blank"><i class="fas fa-download mr-2"></i>Download</a>
                                            </div>
                                            <div class="pc-right">
                                                <?php if($getEpisode['prevEpText'] == "") {
                                                    echo "";
                                                 } else { ?>
                                                <a href="/watch<?=$getEpisode['prevEpLink']?>">
                                                    <button class="btn btn-secondary" type="button"
                                                        style="float:left;height: 32px;font-size: 14px;font-weight: normal;display: block;"><i
                                                            class="fa fa-step-backward"></i></button>
                                                </a>&nbsp;
                                                <?php } ?>
                                                <?php if($getEpisode['nextEpText'] == "") {
                                            echo "";
                                        } else { ?>
                                                <a href="/watch<?=$getEpisode['nextEpLink']?>">
                                                    <button class="btn btn-secondary" type="button"
                                                        style="float:right;height: 32px;font-size: 14px;font-weight: normal;display: block;"><i
                                                            class="fa fa-step-forward"></i></button>
                                                </a>
                                                <?php } ?>
                                                <div class="pc-item pc-fav" id="watch-list-content"></div>
                                                <div class="pc-item pc-download" style="display:none;">
                                                    <a class="btn btn-sm pc-download"><i
                                                            class="fas fa-download mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="player-servers">
                                        <div id="servers-content">
                                            <div class="ps_-status">
                                                <div class="content">
                                                    <div class="server-notice"><strong>Currently watching <b>Episode
                                                                <?=$getEpisode['ep_num']?>
                                                            </b></strong> Switch to alternate servers in case of error.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ps_-block ps_-block-sub servers-mixed">
                                                <div class="ps__-title"><i class="fas fa-server mr-2"></i>SERVERS:</div>
                                                <div class="ps__-list">
                                                    <div class="item">
                                                        <a id="server1"
                                                            href="<?=$websiteUrl?>/player/v1.php?id=<?=$url?>"
                                                            target="iframe-to-load" class="btn btn-server active">Server
                                                            1</a>
                                                    </div>
                                                    <div class="item">
                                                        <a id="server2"
                                                            href="<?=$websiteUrl?>/player/v2.php?id=<?=$url?>"
                                                            target="iframe-to-load" class="btn btn-server">Server 2</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div id="source-guide"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="episodes-content">
                                        <div class="seasons-block seasons-block-max">
                                            <div id="detail-ss-list" class="detail-seasons">
                                                <div class="detail-infor-content">
                                                    <div class="ss-choice">

                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div id="episodes-page-1" class="ss-list ss-list-min" data-page="1"
                                                        style="display:block;">

                                                        <?php 
                                                    foreach ($episodelist as $episodelist) {  ?>
                                                        <a title="Episode <?=$episodelist['episodeNum']?>"
                                                            class="ssl-item ep-item <?php if ($getEpisode['ep_num'] === $episodelist['episodeNum']) {echo 'active';}?>"
                                                            href="/watch/<?=$episodelist['episodeId']?>">
                                                            <div class="ssli-order" title="">
                                                                <?=$episodelist['episodeNum']?>
                                                            </div>
                                                            <div class="ssli-detail">
                                                                <div class="ep-name dynamic-name" data-jname=""
                                                                    title="">
                                                                </div>
                                                            </div>
                                                            <div class="ssli-btn">
                                                                <div class="btn btn-circle"><i class="fas fa-play"></i>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="mask-overlay">
            </div>
        </div>
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
    <script type="text/javascript">
        $(".btn-server").click(function () {
            $(".btn-server").removeClass("active");
            $(this).closest(".btn-server").addClass("active");
        });
    </script>
    <div class="container">
        <div id="main-content">
            <section class="block_area block_area-comment">

                <div class="tab-content">
                    <?php include('https://neverland-anime.netlify.app/_php/disqus.php'); ?>
                </div>
            </section>

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
</body>

</html>