<!DOCTYPE html>
<html>
    <head>
        <!-- Start meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="Shaneeth's Chooky Dhooky Ehooky No Meaning Just Madness.\n
            My personal website.\n Showcase the works done by me & connect me links.">
        <meta name="keywords" content="shaneeth, website, personal, blog, creative, videos, links,
            connect, profile, about, me, about me, works, my, my works, chooky, dhooky, ehooky, no, meaning, just, madness, etc">
        <!-- End meta tags -->

        <!-- for Facebook -->
        <meta property="og:title" content="Shaneeth" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="/images/shareImage.png" />
        <meta property="og:url" content="shaneeth.com" />
        <meta property="og:description" content="Shaneeth's Chooky Dhooky Ehooky No Meaning Just Madness.\n
            My personal website.\n Showcase the works done by me & connect me links." />

        <title>Shaneeth - Personal Website</title>
        <link rel="shortcut icon" href="images/myIcon.ico">

        <!-- Start style tags -->
        <style rel="stylesheet" type="text/css">
            body {
                -moz-opacity: 0;
                -khtml-opacity: 0;
                opacity: 0;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="styles/external/magnific-popup.css">
        <link rel="stylesheet/less" type="text/css" href="styles/style.less">
        <!-- End style tags-->

        <!-- Start script tags -->
        <script type="text/javascript" src="scripts/external/less.min.js"></script>
        <script type="text/javascript" src="scripts/external/jQuery.min.js"></script>
        <script type="text/javascript" src="scripts/external/jquery-ui.js"></script>
        <script type="text/javascript" src="scripts/external/magnific.popup.min.js"></script>
        <script type="text/javascript" src="scripts/script.js"></script>
        <!-- End scripts tags -->
    </head>
    <body>
        <!-- Start header -->
        <header class="top">
            <!-- Start head face -->
            <div class="head-face">
                <div class="face-bg">
                    <div class="eyes-wrap">
                        <div class="left-eye"></div>
                        <div class="right-eye"></div>
                    </div>
                </div>
                <div class="blog-face">
                    <a class="link"href="http://blog.shaneeth.com/">Blog</a>
                </div>
            </div>
            <!-- End head face -->
        </header>
        <!-- End header -->

        <!-- Start content wrapper -->
        <div class="content">
            <!-- Start landing -->
            <section id="landing">
                <div class="clouds-logo">
                    <div class="cloud1 cloud-bg-1"></div>
                    <div class="cloud2 cloud-bg-1"></div>
                    <div class="cloud3 cloud-bg-2"></div>
                    <div class="cloud4 cloud-bg-2"></div>
                    <div class="logo">Shaneeth's</div>
                </div>
                <div class="birds-fly">
                    <div class="bird1"></div>
                    <div class="bird2"></div>
                    <div class="bird3"></div>
                </div>
                <div class="my-ship"></div>
                <div class="chooky-ship"></div>
                <div class="ehooky-ship"></div>
                <div class="dhooky-ship"></div>
                <div class="hill-back-bg"></div>
                <div class="hill-front-left"></div>
                <div class="hill-front-right"></div>
                <div class="sea-bg"></div>
            </section>
            <!-- End landing -->

            <!-- Start about me -->
            <section id="about-me">
                <div id="my-photos-slider">
                    <?php
                        function render_photos() {
                            $image_count = 5;
                            for($i = 1; $i <= $image_count; $i++) {
                                echo "<img src=\"images/myPhotos/$i.png\">";
                            }
                        }
                        render_photos();
                    ?>
                </div>
                <p class="description">
                    Ellooo there..!.<br><br>
                    I am <strong>Shaneeth</strong>. I am full time <strong>web developer</strong> part time <strong>VFX</strong> enthusiast who is crazy about programming.<br><br>
                    Sometimes a tiny bit of neurons tingles up in me  resulting in  pure madness like creating this personal memento of things which i did over my lifetime.<br><br>
                    Also a movie buff, idiosyncratic thinker, light shuttering photographer, wanderlust and an absolute KOOK.
                </p>
                <h1 class="title hobbies-title">Obsessions</h1>
                <div class="hobbies">
                    <div class="hobbies-in hobby-movie">
                        <div class="hobbies-desc">Watching movies</div>
                    </div>
                    <div class="hobbies-in hobby-travel">
                        <div class="hobbies-desc">Travelling</div>
                    </div>
                    <div class="hobbies-in hobby-think">
                        <div class="hobbies-desc">Thinking</div>
                    </div>
                </div>
            </section>
            <!-- End about me -->

            <!-- Start my works -->
            <section id="my-works">
                <h1 class="title">Project mayhem</h1>
                <ul class="work-wrap">
                    <li class="work work-odd work-link" href="https://www.youtube.com/watch?v=uit1amuX1Oo">
                        <div class="work-vid" style="background-image: url('images/video-icons/1.png');"></div>
                        <div class="work-desc">
                            <h2>DESTO</h2>
                            <p>A sample video did for my friend(non commercial - for trial).</p>
                        </div>
                    </li>
                    <li class="work work-even work-link" href="https://www.youtube.com/watch?v=n9leuyxaK8w">
                        <div class="work-vid work-vid-right" style="background-image: url('images/video-icons/2.png');"></div>
                        <div class="work-desc">
                            <h2>Creative Arts and Designs</h2>
                            <p>
                                Created this video during college days for CAD students club.<br>
                                Did using green matte.
                            </p>
                        </div>
                    </li>
                    <li class="work work-odd work-link" href="https://www.youtube.com/watch?v=f4UnMQpyxk0">
                        <div class="work-vid work-vid-left" style="background-image: url('images/video-icons/3.png');"></div>
                        <div class="work-desc">
                            <h2>Behind screens</h2>
                            <p>
                                Making video of Creative Arts and Designs.
                            </p>
                        </div>
                    </li>
                </ul>
            </section>
            <!-- End my works -->

            <!-- Start connect me -->
            <section id="connect-me">
                <h1 class="title">Connect me</h1>
                <ul class="connect-ref">
                    <li class="ext-link" href="http://www.facebook.com/shaneethmuchala">
                        <div class="connect-icon connect-facebook">
                            <div class="ext-details">
                                <div class="fb-like" data-href="https://www.facebook.com/shaneethmuchala" data-width="80" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                            </div>
                        </div>
                    </li>
                    <li class="ext-link" href="http://instagram.com/shaneethmuchala">
                        <div class="connect-icon connect-instagram"></div>
                    </li>
                    <li class="ext-link" href="http://twitter.com/shaneethmuchala">
                        <div class="connect-icon connect-twitter">
                            <div class="ext-details">
                                <a href="https://twitter.com/ShaneethMuchala" class="twitter-follow-button" data-show-count="false">Follow @ShaneethMuchala</a>
                            </div>
                        </div>
                    </li>
                    <li class="ext-link" href="http://plus.google.com/111620520778342395596/posts">
                        <div class="connect-icon connect-google">
                            <div class="ext-details">
                                <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/111620520778342395596" data-rel="author"></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="watermark">
                    <span class="text">
                        Copyright © 2014 - Shaneeth &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a class="link" href="https://github.com/shaneeth/myWebsite">Github</a>
                    </span>
                </div>
            </section>
            <!-- ENd connect me -->
        </div>
        <!-- End content wrapper -->

        <!-- Start menu -->
        <nav class="menu">
            <ul>
                <li>
                    <div class="emenu">
                        <div class="icon icon-home"></div>
                        <a class="menu-link" href="#landing">
                            <div class="lite">Home</div>
                            <div class="dark">
                                <div class="dark-in">Home</div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="emenu">
                        <div class="icon icon-about-me"></div>
                        <a class="menu-link" href="#about-me">
                            <div class="lite">About me</div>
                            <div class="dark">
                                <div class="dark-in">About me</div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="emenu">
                        <div class="icon icon-works"></div>
                        <a class="menu-link" href="#my-works">
                            <div class="lite">Works</div>
                            <div class="dark">
                                <div class="dark-in">Works</div>
                            </div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="emenu">
                        <div class="icon icon-connect"></div>
                        <a class="menu-link" href="#connect-me">
                            <div class="lite">Connect</div>
                            <div class="dark">
                                <div class="dark-in">Connect</div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <div class="action-btns">
                <div class="each-btn">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://shaneeth.com" data-via="shaneethmuchala">Tweet</a>
                </div>
                <div class="each-btn">
                    <div class="share-btn fb-share-button" data-href="http://shaneeth.com" data-layout="button_count"></div>
                </div>
                <div class="each-btn">
                    <div class="g-plus" data-action="share" data-annotation="bubble" data-href="https://shaneeth.com"></div>
                </div>
            </div>
        </nav>
        <!-- End menu -->

        <!-- Facebook, Twitter, Google like start-->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=145928198889712&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!-- Facebook,Twitter,Google like end-->
    </body>
</html>