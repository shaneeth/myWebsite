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
        <link rel="stylesheet" type="text/css" href="styles/external/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="styles/external/magnific-popup.css">
        <link rel="stylesheet/less" type="text/css" href="styles/style.less">
        <!-- End style tags-->

        <!-- Start script tags -->
        <script type="text/javascript" src="scripts/external/less.min.js"></script>
        <script type="text/javascript" src="scripts/external/jQuery.min.js"></script>
        <script type="text/javascript" src="scripts/external/jquery-ui.js"></script>
        <script type="text/javascript" src="scripts/external/flux.min.js"></script>
        <script type="text/javascript" src="scripts/external/magnific.popup.min.js"></script>
        <script type="text/javascript" src="scripts/script.js"></script>
        <!-- End scripts tags -->
    </head>
    <body>
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
                    <a href="">Blog</a>
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
                            $image_count = 7;
                            for($i = 1; $i <= $image_count; $i++) {
                                echo "<img src=\"images/myPhotos/$i.png\">";
                            }
                        }
                        render_photos();
                    ?>
                </div>
                <p class="description">
                    I'm very smart and curious about everything. However, I don't like too much noise and chaos and prefer to be alone in a quiet place. Usually I sit upstairs in a small room/ a chair and a TV and just relax and think after school as a sort of "unwinding" time. I'm funny, and I make cracks and jokes about everything, but sometimes I go too far, and I don't really notice it. I can't read people's cues and unspoken rules and whatnot, so "social norms" and "unspoken rules" and things like that are beyond me. I say what I feel about myself, a person, an event, anything and I say it out loud and proud. I don't care if people get offended by my blunt truth, because I believe that people are too sheltered from reality these days. I am constantly criticizing myself, and since I love to write and draw, I'm always editing things, always trying to achieve perfection in everything I do. This makes me a perfectionist and a procrastinator, and if I am assigned a project that says "do anything you want" I'm frozen. I need it to be narrowed down, I can't just go off and do ANYTHING. Give me some limitations, please.
                </p>
                <div class="hobbies">
                    <div class="hobbies-in hobby-movie" hobby-target=".movie-desc"></div>
                    <div class="hobbies-in hobby-travel" hobby-target=".travel-desc"></div>
                    <div class="hobbies-in hobby-think" hobby-target=".think-desc"></div>
                    <div class="hobbies-desc movie-desc">
                        Hobby - Movie
                    </div>
                    <div class="hobbies-desc travel-desc travel-desc-left">
                        Travel - Movie
                    </div>
                    <div class="hobbies-desc travel-desc travel-desc-right">
                        Travel - Movie - Description
                    </div>
                    <div class="hobbies-desc think-desc">
                        Think - Movie
                    </div>

                </div>
            </section>
            <!-- End about me -->

            <!-- Start my works -->
            <section id="my-works">
                <h1 class="title">My works</h1>
                <ul class="work-wrap">
                    <li class="work work-odd work-link" href="https://www.youtube.com/watch?v=uit1amuX1Oo">
                        <div class="work-vid" style="background: url('images/video-icons/1.png')  no-repeat scroll top left / 350px 150px rgba(0, 0, 0, 0);"></div>
                        <div class="work-desc">
                            <h2>DESTO</h2>
                            <p>A sample video did for my friend.</p>
                        </div>
                    </li>
                    <li class="work work-even work-link" href="https://www.youtube.com/watch?v=n9leuyxaK8w">
                        <div class="work-vid" style="background: url('images/video-icons/2.png')  no-repeat scroll top right / 350px 150px rgba(0, 0, 0, 0);"></div>
                        <div class="work-desc">
                            <h2>Creative Arts and Designs</h2>
                            <p>
                                Created this video during college days for CAD students club.<br>
                                Did using green matte.
                            </p>
                        </div>
                    </li>
                    <li class="work work-odd work-link" href="https://www.youtube.com/watch?v=f4UnMQpyxk0">
                        <div class="work-vid" style="background: url('images/video-icons/3.png')  no-repeat scroll top left / 350px 150px rgba(0, 0, 0, 0);"></div>
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
                        <div class="connect-icon">
                            <i class="fa-facebook-square"></i>
                            <div class="ext-details ext-f-like">
                                <div class="fb-like" data-href="https://www.facebook.com/shaneethmuchala" data-width="80" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                            </div>
                        </div>
                    </li>
                    <li class="ext-link" href="http://instagram.com/shaneethmuchala">
                        <div class="connect-icon">
                            <i class="fa-instagram"></i>
                        </div>
                    </li>
                    <li class="ext-link" href="http://twitter.com/shaneethmuchala">
                        <div class="connect-icon">
                            <i class="fa-twitter-square"></i>
                            <div class="ext-details">
                                <a href="https://twitter.com/ShaneethMuchala" class="twitter-follow-button" data-show-count="false">Follow @ShaneethMuchala</a>
                            </div>
                        </div>
                    </li>
                    <li class="ext-link" href="http://plus.google.com/111620520778342395596/posts">
                        <div class="connect-icon">
                            <i class="fa-google-plus-square"></i>
                            <div class="ext-details">
                                <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/111620520778342395596" data-rel="author"></div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="watermark">
                    <span class="text">
                        Copyright © 2014 - Shaneeth &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="https://github.com/shaneeth/myWebsite">Github</a>
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
    </body>
</html>