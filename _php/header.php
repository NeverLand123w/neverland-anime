<div id="header">
    
            <div class="container">
                <div class="for-mobile">
                    <div class="m-btn" id="m-search"><i class="fas fa-search"></i></div>
                    <div class="m-btn" id="m-menu"><i class="fas fa-bars"></i></div>
                    <div class="clearfix"></div>
                </div>
                <a href="/" id="logo">
                    <img src="https://neverland-anime.netlify.app/files/images/logo.png" alt="Logo">
                    <div class="clearfix"></div>
                </a>
                <div id="header-menu">
                    <ul class="nostyle">
                        <li><a href="<?=$websiteUrl?>/genre.php" title="Genre">Genre</a></li>
                    </ul>
                </div>
                <div class="nav-right">
                    <div id="search">
                        <div class="search-content">
                            <form action="/search" autocomplete="off">
                                <input name="keyword" type="text" class="form-control search-input"
                                    placeholder="Search...">
                                <div class="search-ajax">
                                    <div class="close-icon"><i class="fas fa-times"></i></div>
                                    <div class="load-icon" id="search-loading" style="display: none;">
                                        <div class="spinner-border" role="status"></div>
                                    </div>
                                </div>
                            </form>
                            <div id="search-suggest" class="search-pop" style="display: none;">
                                <div class="search-pop-list"></div>
                            </div>
                        </div>
                    </div>
                    <div id="social-join">
                        <a href="#" class="sj_item" title="Join our discord channel"><i class="icon-discord"></i></a>
                        <div class="clearfix"></div>
                    </div>
                    <div id="user-display"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
</div>
<script type="text/javascript" src="https://4anime.gg/js/app.ob.min.js?v=0.2"></script>
