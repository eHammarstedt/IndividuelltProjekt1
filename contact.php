<body class="bg-grad--3a mobile--bg--3a">
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
                <?php
                    include './includes/social.php';    
                ?>
            </div>
        </div>
    </main>