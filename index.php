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
            </section>
            <!-- End about me -->

            <!-- Start my works -->
            <section id="my-works">
                <a class="work-link" href="https://www.youtube.com/watch?v=uit1amuX1Oo">Desto</a>
                <a class="work-link" href="https://www.youtube.com/watch?v=n9leuyxaK8w">CAD</a>
            </section>
            <!-- End my works -->

            <!-- Start connect me -->
            <section id="connect-me"></section>
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
        </nav>
        <!-- End menu -->
    </body>
</html>