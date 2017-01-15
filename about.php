<!DOCTYPE html>
<html lang="en" class="borderStyleEdge">
<head>
    <title>Elin - Front end developer</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Elin Hammarstedt's portfolio - about" /> 
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
<body class="bg-grad--4a bg--4b mobile--bg--4c">
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
                <div class="block-hz-split block-hz-split--medium">
                    <div class="block-hz-split__over bg--white mobile--header">
                        <h1>Hello!</h1>
                    </div>

                    <!--top left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--4c">
                        <!--shall be empty-->
                    </div>
                    <!--top left side end-->

                    <!--top right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--wave bg--4a mobile--small-fill mobile--border mobile--bg--4a">
                        <!--shall be empty-->
                    </div>
                    <!--top right side end-->
                </div>

                <div class="block-hz-split block-hz-split--medium bg--4a mobile--margin-top-15 mobile--border-top">
                    <!--bottom left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 border--top bg--4a">
                        <div class="block-hz-split">
                            <div class="block-hz-split__col block-hz-split__col--20 bg--wave bg--4b">
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--80 block--padding-05 bg--white mobile--border">
                                <h3 class="mobile--padding-top-15">I'm Elin</h3>
                                <p class="text--left">this is my digital portfolio.
                                This website depicts all of the work that I have completed throughout this year.
                                it displays the growth and the progress that i have made, as well as the assignments i am most proud of. over the past months, I have put time, energy, and effort into my tasks and have learned more than ever because of it. Reflecting on my work has shown me how far I have come both a student, and a person.</p>
                            </div>
                        </div>
                    </div>
                    <!--bottom left side end-->

                    <!--bottom right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--4a border--top">
                        <div class="block-hz-split">
                            <div class="block-hz-split__col block-hz-split__col--50 bg--4c mobile--bg--4b bg--dot mobile--large-fill mobile--border">
                                    <img id="profilePicture" class="borderStyle borderStyleEdge" src="img/img1.jpg" alt="photo of me. I got brown hair, a pair of black glasses and a scarf with a scottish pattern"/>
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--50 bg--4b desktop--only">
                                <h3 class="desktop--contact">
                                    <a href="contact.htm">contact me!</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--bottom right side end-->
                </div>
            </div>

            <div class="mobile--bg--4a mobile--border mobile--border-top mobile--margin-top-15 text--center" id="shareContainer">
                <h3 class="desktop--hidden" id="shareCaption">share</h3>
                <a class="share-btn share-facebook" id="shareFacebook" href="javascript:share('https://facebook.com/sharer.php?u=' + encodeURIComponent(document.URL))"></a>
                <a class="share-btn share-twitter" id="shareTwitter" href="javascript:share('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL))"></a>
                <a class="share-btn share-linkedin" id="shareLinkedIn" href="javascript:share('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title))"></a>
                <a class="share-btn share-email" id="shareEmail" href="javascript:share('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL))"></a>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="javascript/menu.js"></script>
    <script type="text/javascript" src="javascript/social.js"></script>
</body>
</html>