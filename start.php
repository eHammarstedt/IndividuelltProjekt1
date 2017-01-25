<body class="bg-grad--1a mobile--bg-grad--1a mobile--bg--1c">
    <!--Menu Start-->
    <header>
        <?php
            include './includes/menu.php';
        ?>
    </header>
    <!--Menu end-->
    <!--Content start-->
    <main>
        <div class="divContent" id="Page-Index">
            <div class="divContent2">
                <div class="block-hz-split block-hz-split--large">
                    <div class="block-hz-split__over bg--white mobile--border mobile--border-top">
                        <h1 class="<?php if(loggedIn()){echo "editable-text";}?>">Elin Hammarstedt<br>
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
                <?php
                    include './includes/social.php';    
                ?>
            </div>
        </div>
    </main>