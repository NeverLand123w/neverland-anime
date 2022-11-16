
            <div class="detail_cover overlay">
                <div class="container">
                    <div class="elm-for-desktop">
                        <h1 class="anime_name">
                        <?=$title['romaji']?>
                        </h1>
                        <div class="link">
                            <span class="item-head" style="margin-right: 20px;">Genres:</span>
                            <?php foreach($getAnime['genres'] as $genre) { ?><a style="margin-right: 20px;"
                                href="<?=$websiteUrl?>/genre/<?php $genreUrl = strtolower($genre); echo str_replace(" ","
                                +", $genreUrl);?>">
                                <?=$genre?>
                            </a>
                            <?php } ?>
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
                            <div class="anime_poster"><img src="<?=$getAnime['image']?>" class="anime_poster-img"
                                    title="" alt=""></div>
                        </div>
                        <div class="display-mobile">
                            <div class="detail-min">
                                <h1 class="anime_name">
                                <?=$title['romaji']?>
                                </h1>
                            </div>
                        </div>
                        <div class="adb_s-detail">
                            
                            <div class="block block-others">
                                <div class="element">
                                    <div class="title">Type</div>
                                    <div class="result">
                                        <?=$getAnime['type']?>
                                    </div>
                                </div>

                                <div class="element">
                                    <div class="title">Release Date (JP)</div>
                                    <div class="result">
                                        <?=$getAnime['season']?>
                                    </div>
                                </div>
                                <div class="element">
                                    <div class="title">Status</div>
                                    <div class="result"> <a href="<?php if ($getAnime['status'] == " Completed")
                                            {echo "/status/completed" ;} else {echo "/status/ongoing" ;}?>">
                                            <?=$getAnime['status']?>
                                        </a></div>
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
                            <div class="link">
                                <span class="item-head" style="margin-right: 20px;">Genres:</span>
                                <?php foreach($getAnime['genres'] as $genre) { ?><a style="margin-right: 20px;"
                                    href="<?=$websiteUrl?>/genre/<?php $genreUrl = strtolower($genre); echo str_replace(" ","
                                    +", $genreUrl);?>">
                                    <?=$genre?>
                                </a>
                                <?php } ?>
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
                            <a class="more"></a>
                        </div>
                        <div class="episodes_list" id="episodes-content">
                            <div class="seasons-block seasons-block-max">
                                <div id="detail-ss-list" class="detail-seasons">
                                    <div class="detail-infor-content">

                                        <div id="episodes-page-1" class="ss-list ss-list-min" data-page="1"
                                            style="display:block; z-index: 5;" >

                                            <?php 
                                                    foreach ($episodelist as $episodelist) {  ?>
                                            <a title="Episode <?=$episodelist['episodeNum']?>" class="ssl-item ep-item"
                                                href="<?=$websiteUrl?>/watch/<?=$episodelist['episodeId']?>">
                                                <div class="ssli-order" title="">
                                                    <?=$episodelist['episodeNum']?>
                                                </div>
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
                                    <div class="toggle_comment">
                                        <?php include('./_php/disqus.php'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /Detail -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <!--End: Main-->
            
        </div>
        <div class="clearfix"></div>
        <div id="footer">
                <div class="container">
                    <div class="footer_about">
                    <?php include('./_php/footer.php'); ?>
                    </div>
                </div>
         </div>

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript"
            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-612507290ea09545"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
            integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
            crossorigin="anonymous"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/js/app.ob.min.js?v=0.2"></script>
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