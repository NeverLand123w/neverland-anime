<?php 
error_reporting(E_ALL ^ E_WARNING);
$api = "https://anikatsu.shashankktiwari.repl.co";
$websiteTitle = "Neverland"; 
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";
$websiteLogo = "/files/images/logo.png";
$contactEmail = "neverlandanime7@gmail.com";
$banner = $websiteUrl . "/files/images/logo.png";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?=$websiteTitle?> - Official
        <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads
    </title>
    <script async src="https://arc.io/widget.min.js#VtsaVyfg"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads" />
    <meta name="description"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords"
        content="<?=$websiteTitle?>, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads">
    <meta property="og:description"
        content="<?=$websiteTitle?> - Official <?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=$websiteTitle?>">
    <meta property="og:url" content="<?=$websiteUrl?>/home">
    <meta itemprop="image" content="<?=$banner?>">
    <meta property="og:image" content="<?=$banner?>">
    <meta property="og:image:secure_url" content="<?=$banner?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/favicon.ico" />
    <!--Begin: Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LXHBJZ72PZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-LXHBJZ72PZ');
    </script>


    <link rel="stylesheet" href="https://neverland-anime.netlify.app/files/css/style1.css">

</head>

<body>
<?php include('_php/sidebar.php'); ?>
    <div id="app-mount">
        <?php include('_php/header.php'); ?>
        <div class="clearfix"></div>
        <!--Begin: Main-->
        <div id="main-wrapper" class="page-home">
            <div class="container">
                

               
                <!-- GENRE -->
                <?php include('_php/sidenav.php'); ?>
            </div>
            <!--End: Main-->

            <?php include('_php/footer.php'); ?>


            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript"
                src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-612507290ea09545"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
                integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
                crossorigin="anonymous"></script>
            <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="https://4anime.gg/js/app.ob.min.js?v=0.2"></script>
            <script type="application/json" id="userSettings"></script>
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