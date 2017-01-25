<body class="bg-grad--5a bg--5c mobile--bg--5b">
    <!--Menu Start-->
    <header>
        <?php
            include './includes/menu.php';
        ?>
    </header>
    <!--Menu end-->
    <!--Content start-->
    <main>
        <div class="divContent" id="Page-Portfolio">
            <div class="divContent2">
                <div class="block-hz-split block-hz-split--medium">
                    <div class="block-hz-split__over bg--white mobile--border mobile--border-top" id="captionUnderConstruction">
                        <h1 class="<?php if(loggedIn()){echo "editable-text";}?>">under construction</h1>
                    </div>

                    <!--top left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--5a mobile--bg--5a bg--stripe mobile--large-fill mobile--border mobile--border-top">
                        <!--shall be empty-->
                    </div>
                    <!--top left side end-->

                    <!--top right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--5b">
                        <!--shall be empty-->
                    </div>
                    <!--top right side end-->
                </div>

                <div class="block-hz-split block-hz-split--medium bg--5a">
                    <!--bottom left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 border--top">
                        <div class="block-hz-split">
                            <div class="block-hz-split__col block-hz-split__col--20 bg--5b">
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--80 block--padding-05 bg--white mobile--margin-top-15 mobile--border mobile--border-top">
                               <iframe src="https://player.vimeo.com/video/6246701?autoplay=1&loop=1&color=ffff00&title=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <!--bottom left side end-->

                    <!--bottom right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--5a border--top">
                        <div class="block-hz-split">
                            <div class="block-hz-split__col block-hz-split__col--50 bg--stripe bg--5a">
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--50 bg--5b">
                            </div>
                        </div>
                    </div>
                    <!--bottom right side end-->
                </div>
            </div>

            <div class="bg--white mobile--border mobile--border-top mobile--margin-top-15 text--center" id="shareContainer">
                <?php
                    include './includes/social.php';    
                ?>
            </div>
        </div>
    </main>