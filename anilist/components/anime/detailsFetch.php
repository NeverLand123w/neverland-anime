<div id="main-wrapper" class="page-detail" data-id="100" data-page="detail">
    <div class="detail_cover overlay">
        <div class="container">
            <div class="elm-for-desktop">
                <h1 class="anime_name" data-jname="<?=$title['romaji']?>">
                    <?=$title['romaji']?>
                </h1>
                <div class="genres">

                    <div class="link">
                        <span class="item-head" style="margin-right: 20px;">Genres:</span>
                        <?php foreach($getAnime['genres'] as $genre) { ?><a  style="margin-right: 20px;"
                            href="<?=$websiteUrl?>/genre/<?php $genreUrl = strtolower($genre); echo str_replace(" ","
                            +", $genreUrl);?>">
                            <?=$genre?>
                        </a>
                        <?php } ?>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Detail -->
        <div class="anime_detail_box">
            <div class="adb_-side">
                <div class="adb_s-poster">
                    <div class="anime_poster"><img src="<?=$getAnime['image']?>" data-src="<?=$getAnime['image']?>"
                            class="anime_poster-img" title="" alt=""></div>
                </div>
                <div class="display-mobile">
                    <div class="detail-min">
                        <h1 class="anime_name">
                            <?=$title['romaji']?>
                        </h1>
                        <h2 class="anime_studio">



                        </h2>
                    </div>
                </div>
                <div class="adb_s-detail">

                    <div class="block block-others">
                        <div class="element">
                            <div class="title">Type</div>
                            <div class="result"><a href="/tv series" class="link">TV Series</a></div>
                        </div>

                        <div class="element">
                            <div class="title">Release Date (JP)</div>
                            <div class="result">Fall 1999</div>
                        </div>
                        <div class="element">
                            <div class="title">Status</div>
                            <div class="result"><a href="<?php if ($getAnime['status'] == " Completed")
                                    {echo "/status/completed" ;} else {echo "/status/ongoing" ;}?>"><span class="name">
                                        <?=$getAnime['status']?></a></div>
                        </div>
                        <div class="element">
                            <div class="title">Language</div>
                            <div class="result">

                                <?=strtoupper($getAnime['subOrDub'])?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adb_-main">
                <div class="display-mobile elm-genres">
                    <div class="elm-title mb-2">Genres</div>
                    <div class="genres">


                        <div class="link">
                            <?php foreach($getAnime['genres'] as $genre) { ?><a
                                href="<?=$websiteUrl?>/genre/<?php $genreUrl = strtolower($genre); echo str_replace(" ","
                                +", $genreUrl);?>">
                                <?=$genre?>
                            </a>
                            <?php } ?>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="description">
                    <div class="display-mobile">
                        <div class="elm-title mb-2">Description</div>
                    </div>
                    <div class="show">
                        <?=$getAnime['description']?>
                    </div>
                </div>
                <div class="episodes_list" id="episodes-content">
                    <div class="list_episode">
                        <?php if(count($getAnime['episodes']) == 0) {
                            echo "";
                        } else { ?>
                        <div class="film-buttons">
                            <a style="background: none!important; border: 5px solid #221f1f!important;color: #dedede;" href="<?=$websiteUrl?>/watch/<?php foreach(array_slice($episodelist, 0, 1) as $episode1) {?><?=$episode1['id']?><?php } ?>"
                                class="btn btn-radius btn-primary btn-play"><i class="fas fa-play mr-2"></i>Watch
                                now</a>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="anime_comments">
                    <div class="toggle_comment">
                        <?php include('../_php/disqus.php'); ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /Detail -->
        <div class="clearfix"></div>
    </div>
</div>
<!--End: Main-->

</div>
</div>