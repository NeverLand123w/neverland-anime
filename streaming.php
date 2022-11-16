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
    <link rel="stylesheet" href="https://neverland-anime.netlify.app/files/css/style1.css">
    <link rel="stylesheet" href="https://neverland-anime.netlify.app/files/css/min.css">
</head>

<body>
<?php include('_php/sidebar.php'); ?>
    <div id="app-mount">
    <?php include('_php/header.php'); ?>
    <div class="clearfix"></div>
    <div class="container">
        <div class="anime_watch_box">
            <div class="anime_player">
                <div class="iframe-16x9">
                    <div class="loading-relative loading-box" style="display:none;" id="player-loading">
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
            </div>
            <div class="player_controls">
                    <div class="pc_left">
                        <div id="bookmark-content" class="item" style="margin-right: 0 !important;"></div>
                        <div id="toggle-light" class="item"><a class="link"><i class="fas fa-lightbulb me-1"></i> Focus</a></div>
                        <div class="pc-item pc-download item">
                                                    <a class="btn btn-sm pc-download" href="<?=$download?>"><i
                                                            class="fas fa-download mr-2"></i>Download</a>
                                                </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="pc_right">
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
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
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
                                <a id="server1" href="<?=$websiteUrl?>/player/v1.php?id=<?=$url?>"
                                    target="iframe-to-load" class="btn btn-server active">Server
                                    1</a>
                            </div>
                            <div class="item">
                                <a id="server2" href="<?=$websiteUrl?>/player/v2.php?id=<?=$url?>"
                                    target="iframe-to-load" class="btn btn-server">Server 2</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="source-guide"></div>
                    </div>
                </div>
                </div>
                <div class="display-mobile">
                    <div class="detail-min mt-0">
                        <h1 class="anime_name"><a href="/kobato-hajimete-no-kobato-4226">Kobato.: Hajimete no Kobato.</a></h1>
                        <small>TV Series</small>
                    </div>
                </div>

                <div class="episodes-content">
                                    <div class="seasons-block seasons-block-max">
                                        <div id="detail-ss-list" class="detail-seasons">
                                            <div class="detail-infor-content">
                                                
                                                <div id="episodes-page-1" class="ss-list ss-list-min" data-page="1"
                                                    style="display:block;">

                                                    <?php 
                                                    foreach ($episodelist as $episodelist) {  ?>
                                                    <a title="Episode <?=$episodelist['episodeNum']?>" class="ssl-item ep-item <?php if ($getEpisode['ep_num'] === $episodelist['episodeNum']) {echo 'active';}?>"
                                                        href="/watch/<?=$episodelist['episodeId']?>">
                                                        <div class="ssli-order" title=""><?=$episodelist['episodeNum']?></div>
                                                        <div class="ssli-detail">
                                                            <div class="ep-name dynamic-name" data-jname="" title="">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="clearfix"></div>
                                                    </a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>

            <div class="anime_comments">
                <div id="disqus_thread">
                    <div class="toggle_comment">
                    <?php include('_php/disqus.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Watch -->
        
        
        <div class="clearfix"></div>
    </div>
    </div>
    </div>
    <!--End: Main-->
    <div id="footer">
        <div class="container">
            <?php include('_php/footer.php'); ?>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    <div id="off-light"></div>
    </div>


    <script type="text/javascript" src="https://4anime.gg/js/app.ob.min.js?v=0.2"></script>
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
    
    </div>

    <script>
        function checkLogin() {
            if (!isLoggedIn) {
                window.location.href = '/login?nextUrl=' + window.location.href;
            }
            return isLoggedIn;
        }

        $(document).ready(function () {
            $("#toggle-light").click(function () {
                $("#off-light").toggleClass("active");
                $(".anime_player").addClass("active");
            });
            $("#off-light").click(function () {
                $(this).removeClass("active");
                $(".anime_player").removeClass("active");
            });
            $("#toggle-resize").click(function () {
                $(".page-watch").toggleClass("full-size");
            });
            $(".item.item-check").click(function () {
                $(this).toggleClass("active");
            });
        });
        new Swiper('#recently-updated-box .anime_swipe .swiper-container', {
            navigation: {
                nextEl: '#recently-updated-box .ctr-next',
                prevEl: '#recently-updated-box .ctr-prev',
            },
            breakpoints: {
                300: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                800: {
                    slidesPerView: 5,
                    spaceBetween: 15,
                },
                1060: {
                    slidesPerView: 6,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 7,
                    spaceBetween: 15,
                },
            },
            autoplay: false,
        });
        new Swiper('#recently-added-box .anime_swipe .swiper-container', {
            navigation: {
                nextEl: '#recently-added-box .ctr-next',
                prevEl: '#recently-added-box .ctr-prev',
            },
            breakpoints: {
                300: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                800: {
                    slidesPerView: 5,
                    spaceBetween: 15,
                },
                1060: {
                    slidesPerView: 6,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 7,
                    spaceBetween: 15,
                },
            },
            autoplay: false,
        });
        new Swiper('#upcoming-box .anime_swipe .swiper-container', {
            navigation: {
                nextEl: '#upcoming-box .ctr-next',
                prevEl: '#upcoming-box .ctr-prev',
            },
            breakpoints: {
                300: {
                    slidesPerView: 3,
                    spaceBetween: 0,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                800: {
                    slidesPerView: 5,
                    spaceBetween: 15,
                },
                1060: {
                    slidesPerView: 6,
                    spaceBetween: 15,
                },
                1200: {
                    slidesPerView: 7,
                    spaceBetween: 15,
                },
            },
            autoplay: false,
        });

        var movieId = $('#main-wrapper').data('id'), page = $('#main-wrapper').data('page');
        if (movieId) {
            $.get('/ajax/episode/list/' + movieId, function (res) {
                if (res.status) {
                    $('#episodes-content').html(res.html);
                    if (parseInt(userSettings.show_watched) === 1) {
                        $('.episodes_list').addClass('on-visited');
                    }

                    if ($('#main-wrapper').hasClass('page-watch')) {
                        var urlParams = new URLSearchParams(window.location.search);
                        var epElByUrl = $('.ep-item[data-id=' + urlParams.get('ep') + ']');
                        if (urlParams.has('ep') && epElByUrl.length > 0) {
                            epElByUrl.click();
                        } else {
                            if (localStorage.getItem('watching.' + movieId)) {
                                var epElByStorage = $('.ep-item[data-id=' + localStorage.getItem('watching.' + movieId) + ']');
                                epElByStorage.click();
                            } else {
                                $('.episodes_list .ep-item').first().click();
                            }
                        }
                    }
                }
            });
            $.get('/ajax/bookmark/info/' + movieId + '?page=' + page, function (res) {
                if (res.status) $('#bookmark-content').html(res.html);
            });
        }

        $('#profile-form').submit(function (e) {
            e.preventDefault();

            $('#profile-loading').show();

            var formData = $(this).serialize();

            $.post('/ajax/user/profile', formData, function (res) {
                $('#profile-loading').hide();
                if (res.status) {
                    $('#c-password').val('');
                    $('#n-password').val('');
                    $('#cf-n-password').val('');
                    $('#change-password').collapse('hide');
                    toastr.success(res.msg, '', { timeout: 5000 });
                } else {
                    toastr.error(res.msg, '', { timeout: 5000 });
                }
            });
        });

        $("#toggle-view").click(function () {
            $(this).toggleClass("active");
            $(".ud_-bookmarks .anime_list").toggleClass("anime_list-grid");
            $(".ud_-bookmarks .anime_list").toggleClass("anime_list-default");
        });

        var userSettings = $('#userSettings').text(), initDisqus = false, clickedLoadComment = false;

        if (userSettings === "") {
            if (localStorage.getItem('userSettings')) {
                userSettings = JSON.parse(localStorage.getItem('userSettings'));
            } else {
                userSettings = {
                    auto_play: 1,
                    auto_next: 1,
                    auto_load_comments: 0,
                    enable_dub: 0,
                    anime_name: "en",
                    play_original_audio: 0,
                    show_watched: 1
                };
                localStorage.setItem('userSettings', JSON.stringify(userSettings));
            }
        } else {
            localStorage.setItem('userSettings', userSettings);
            userSettings = JSON.parse(userSettings);
        }

        // console.log(userSettings);

        parseInt(userSettings.show_watched) === 1 && $('.quick-settings[data-option=show_watched]').addClass('active');
        parseInt(userSettings.auto_play) === 1 && $('.quick-settings[data-option=auto_play]').addClass('active');
        parseInt(userSettings.auto_next) === 1 && $('.quick-settings[data-option=auto_next]').addClass('active');
        parseInt(userSettings.auto_load_comments) === 1 && $('.quick-settings[data-option=auto_load_comments]').addClass('active');

        function bookmarkSubmit(data) {
            if (!isLoading) {
                isLoading = true;
                $.post('/ajax/bookmark/add', data, function (res) {
                    if (res.redirectTo) {
                        window.location.href = res.redirectTo;
                    }
                    if (res.status) {
                        toastr.success(res.msg, 'Success', { timeOut: 5000 });
                        if (res.html) {
                            $('#bookmark-content').html(res.html);
                        } else {
                            window.location.reload();
                        }
                    } else {
                        toastr.error(res.msg, '', { timeOut: 5000 });
                    }
                    isLoading = false;
                });
            }
        }

        $(document).on("click", ".btn-bookmark", function () {
            if (checkLogin()) {
                var type = $(this).data('type'), id = $(this).data('id'), page = $(this).data('page');
                if (typeof grecaptcha !== 'undefined') {
                    grecaptcha.execute(recaptchaSiteKey, { action: 'bookmark' }).then(function (_token) {
                        bookmarkSubmit({ movieId: id, type, page, _token });
                    })
                } else {
                    bookmarkSubmit({ movieId: id, type, page, _token: '' });
                }
            }
        });

        function nextEpisode() {
            var nextEl = $('.ep-item.active').next();
            if (nextEl.length > 0) {
                nextEl.click();
            }
        }

        function prevEpisode() {
            var prevEl = $('.ep-item.active').prev();
            if (prevEl.length > 0) {
                prevEl.click();
            }
        }

        function loadDisqus() {
            var url = window.location.origin + window.location.pathname;
            if (!initDisqus) {
                (function () { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://4anime-10.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    console.log(d.head);
                    (d.head || d.body).appendChild(s);
                    initDisqus = true;
                })();
            } else {
                if (typeof DISQUS !== 'undefined') {
                    DISQUS.reset({
                        reload: true,
                        config: function () {
                            this.page.url = url;
                        }
                    });
                }
            }
        }

        function quickSettings(option, value) {
            userSettings[option] = value;
            if (isLoggedIn) {
                $.post('/ajax/user/settings?action=quick', {
                    option: option,
                    value: value
                }, function (res) {
                    if (res.status) {
                        toastr.success(res.msg, '', { timeout: 5000 });
                    } else {
                        toastr.error(res.msg, '', { timeout: 5000 });
                    }
                    if (option === 'enable_dub') {
                        window.location.reload();
                    }
                    if (res.redirectTo) {
                        window.location.href = res.redirectTo;
                    }
                });
            } else {
                localStorage.setItem('userSettings', JSON.stringify(userSettings));
                if (option === 'enable_dub') {
                    window.location.reload();
                }
            }
        }

        $('#tc-button').click(function () {
            loadDisqus();
        })

        $('.quick-settings').click(function () {
            var option = $(this).data("option"), value = $(this).hasClass('active') ? 0 : 1;
            quickSettings(option, value);
            if (option === 'show_watched' && value === 1) {
                $('.episodes_list').addClass('on-visited');
            } else {
                $('.episodes_list').removeClass('on-visited');
            }
        });
    </script>
</body>

</html>