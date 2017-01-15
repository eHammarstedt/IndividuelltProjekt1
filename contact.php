<!DOCTYPE html>
<html lang="en" class="borderStyleEdge">
<head>
    <title>Elin - Front end developer</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Elin Hammarstedt's portfolio - contact" /> 
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
<body class="bg-grad--3a mobile--bg--3a">
<!--FB widget script-->
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->

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
                <div class="block-hz-split block-hz-split--medium bg--3a">
                    <div class="block-hz-split__over bg--white mobile--header">
                        <h1>
                            get in touch
                            <small><a href="mailto:elinhammarstedt@gmail.com">elinhammarstedt@gmail.com</a></small>
                        </h1>
                    </div>

                    <!--top left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--3b">
                        <!--shall be empty-->
                    </div>
                    <!--top left side end-->

                    <!--top right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--dot bg--3a mobile--small-fill mobile--border mobile--bg--3b">
                        <!--shall be empty-->
                    </div>
                    <!--top right side end-->
                </div>

                <div class="block-hz-split block-hz-split--medium bg--3a mobile--margin-top-15 mobile--border-top">
                    <!--bottom left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--3a border--top">
                        <div class="block-hz-split">
                            <div class="block-hz-split__col block-hz-split__col--20 bg--3a bg--dot">
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--80 block--padding-05 bg--white mobile--border">
                                <h3 class="mobile--padding-top-15" id="workTogetherCaption">Let's work together!</h3>
                                <p class="text--center">
                                    <a class="share-btn share-facebook" target="_blank" href="https://www.facebook.com/ElinFrontEndDeveloper"></a>
                                    <a class="share-btn share-twitter" target="_blank" href="https://twitter.com/_eHammarstedt_"></a>
                                    <a class="share-btn share-linkedin" target="_blank" href="https://se.linkedin.com/in/elin-hammarstedt"></a>
                                    <a class="share-btn share-email" target="_blank" href="mailto:elinhammarstedt@gmail.com"></a>
                                </p>
                                <!--Linked in
                                <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
                                <script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/elin-hammarstedt" data-format="inline" data-related="false"></script>-->
                            </div>
                        </div>
                    </div>
                    <!--bottom left side end-->

                    <!--bottom right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--3a border--top">
                        <div class="block-hz-split">
                            <div class="block-hz-split__col block-hz-split__col--50 bg--3b mobile--bg--3c mobile--small-fill mobile--border">
                                <p class="text--center">Leave a message!</p><br>
                                <form>
                                    <input type="text" name="firstname" placeholder="Name"><br>
                                    <input type="text" name="email" placeholder="example@mail.com"><br>
                                    <textarea name="message" placeholder="Message"></textarea><br>
                                    <input type="submit" value="Send" class="submitBtn">
                                </form>
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--50 bg--3c">
                            <p class="text--center">GuestBook</p>
                            </div>
                        </div>
                    </div>
                    <!--bottom right side end-->
                </div>
            </div>

            <div class="bg--white mobile--border mobile--border-top mobile--margin-top-15 text--center" id="shareContainer">
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