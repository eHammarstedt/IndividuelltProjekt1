<?php include('./includes/header.php');

        $dbusername = "root";
        $dbhost = "localhost";
        $dbpassword = "";
        $dbdatabas = "individualProject";

      $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);
      $result = mysqli_query( $connection, "SELECT * FROM abouttext WHERE id IN (1, 2)" );

?>
<body class="bg-grad--4a bg--4b mobile--bg--4c">
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
                <?php
                    include './includes/social.php';    
                ?>
            </div>
        </div>
    </main>
    <?php
        include './includes/footer.php';    
    ?>
</body>
</html>