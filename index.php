﻿<!DOCTYPE html>
<html lang="en" class="borderStyleEdge">
<head>
    <title>Elin - Front end developer</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Elin Hammarstedt's portfolio - Startpage" /> 
    <meta name="author" content="Elin Hammarstedt">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,500,700,900" rel="stylesheet">
    <!--stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/generalStyle.css" />
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="css/tablet.css" />
    <link rel="stylesheet" type="text/css" href="css/desktop.css" />
    
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

</head>
<body class="bg-grad--1a mobile--bg-grad--1a mobile--bg--1c">
    <!--Menu Start-->
    <header>
        <?php
            include 'menu.php';
        ?>
    </header>
    <!--Menu end-->
    <!--Content start-->
    <main>
        <div class="divContent" id="Page-Index">
            <div class="divContent2">
                <div class="block-hz-split block-hz-split--large">
                    <div class="block-hz-split__over bg--white mobile--border mobile--border-top">
                        <h1>Elin Hammarstedt<br>
                        Front end developer</h1>
                    </div>

                    <!--top left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--1b">
                        <!--shall be empty-->
                    </div>
                    <!--top left side end-->

                    <!--top right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--dot bg--1a mobile--bg--1b mobile--small-fill mobile--border">
                        <!--shall be empty-->
                    </div>
                    <!--top right side end-->

                </div>

                <div class="block-hz-split block-hz-split--small">
                    <!--bottom left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--1a border--top mobile--margin-top-15">
                        <div class="block-hz-split mobile--split mobile--countdown mobile--border mobile--border-top">
                            <div class="block-hz-split__col block-hz-split__col--30 bg--stripe bg--1c desktop--only">
                                <!--shall be empty-->
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--20 bg--white mobile--col-33 tablet--col-25">
                                <h4 class="text--rotateLeft rotateleftfix">
                                    <span>Internship</span></br>
                                    <span>starts in</span></br>
                                </h4>
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--20 bg--1a mobile--bg--1a mobile--col-33 tablet--col-25">
                                <h2 class="countdown text--right" id="clockLIA">
                                    <span class="days"></span>
                                    <span class="hours"></span>
                                    <span class="minutes"></span>
                                    <span class="seconds"></span>
                                </h2>
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--30 bg--1a mobile--bg--1a mobile--col-33 tablet--col-25">
                                <h2 class="text--left">
                                days</br>
                                hrs</br>
                                min</br>
                                sec</br>
                                </h2>
                            </div>
                            <span class="block-hz-split__col block-hz-split__col--30 bg--1c tablet--only tablet--col-25 bg--stripe">
                                <!--shall be empty-->
                            </span>
                        </div>
                    </div>
                    <!--bottom left side end-->

                    <!--bottom right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--1a border--top">
                        <div class="block-hz-split mobile--split mobile--countdown mobile--border">
                            <div class="block-hz-split__col block-hz-split__col--30 block--padding-05 bg--1c mobile--hidden tablet--col-25 bg--stripe">
                                <!--shall be empty-->
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--20 bg--1b mobile--bg--1a mobile--col-33 tablet--col-25">
                                <h2 class="countdown text--right" id="clockGraduation">
                                    <span class="days"></span>
                                    <span class="hours"></span>
                                    <span class="minutes"></span>
                                    <span class="seconds"></span>
                                </h2>
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--30 bg--1b mobile--bg--1a mobile--col-33 tablet--col-25">
                                <h2 class="text--left">
                                days</br>
                                hrs</br>
                                min</br>
                                sec</br>
                                </h2>
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--20 bg--white mobile--col-33 tablet--col-25">
                                <h4 class="text--rotateLeft rotateleftfix">
                                    <span>until I</span></br>
                                    <span>Graduate</span></br>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--bottom right side end-->

                </div>
            </div>

            <div class="mobile--bg--1b mobile--border mobile--border-top mobile--margin-top-15 text--center" id="shareContainer">
                <h3 class="desktop--hidden" id="shareCaption">share</h3>
                <a class="share-btn share-facebook" id="shareFacebook" href="javascript:share('https://facebook.com/sharer.php?u=' + encodeURIComponent(document.URL))"></a>
                <a class="share-btn share-twitter" id="shareTwitter" href="javascript:share('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL))"></a>
                <a class="share-btn share-linkedin" id="shareLinkedIn" href="javascript:share('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title))"></a>
                <a class="share-btn share-email" id="shareEmail" href="javascript:share('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL))"></a>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="javascript/menu.js"></script>
    <script type="text/javascript" src="javascript/countdowns.js"></script>
    <script type="text/javascript" src="javascript/social.js"></script>
</body>
</html>