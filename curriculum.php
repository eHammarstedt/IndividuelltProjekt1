<?php include('./includes/header.php');

        $dbusername = "root";
        $dbhost = "localhost";
        $dbpassword = "";
        $dbdatabas = "individualProject";

      $connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);
      $result = mysqli_query( $connection, "SELECT * FROM abouttext WHERE id IN (1, 2)" );

?>
<body class="bg-grad--2a bg--2c mobile--bg--2b">
    <!--Menu Start-->
    <header>
        <?php
            include 'menu.php';
        ?>
    </header>
    <!--Menu end-->
    <!--Content start-->
    <main>
        <div class="divContent">
            <div class="divContent2">
                <div class="block-hz-split">

                    <div class="block-left mobile--margin-top-15 bg--white" id="job_container">
                        <!--caption for mobile start-->
                        <div class="desktop--hidden mobile--bg--2a">
                            <div class="mobile--expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header">Experience</h4>
                        </div>
                        <!--caption for mobile end-->

                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>IKEA</h4>
                            <p>Digital Artist</p>
                            <p>oct 2013 - aug 2016</p>
                            <p>
                                produced content for</br>
                                IKEA.com </br>
                                Catalogue 2014 - 2015 </br>
                                Digital Catalogue 2015 - 2016</br>
                                Digital Catalogue 2016 - 2017</br>
                                Buying guides</br>
                            </p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>Exotic matter</h4>
                            <p>Naiad TD &amp; 3D artist</p>
                            <p>jan 2012 - june 2012</p>
                            <p></p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>Filmtecknarna</h4>
                            <p>3D artist</p>
                            <p>march 2009 - june 2009</p>
                            <p></p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>ikea</h4>
                            <p>retousch artist</p>
                            <p>jan 2009 - march 2009</p>
                            <p></p>
                        </div>

                        <!--caption for desktop start-->
                        <div class="block-left__col block-left__col--20 border--left bg--2b desktop--only">
                            <div class="expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header">Experience</h4>
                        </div>
                        <!--caption for desktop end-->
                    </div>

                    <div class="block-left mobile--margin-top-15 bg--white" id="school_container">
                        <!--caption for mobile start-->
                        <div class="desktop--hidden mobile--bg--2a">
                            <div class="mobile--expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header">education</h4>
                        </div>
                        <!--caption for mobile end-->

                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>KYH</h4>
                            <p>Front end developer</p>
                            <p>jan 2012 - june 2012</p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>nackademin</h4>
                            <p>3D artist</p>
                            <p>jan 2012 - june 2012</p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>Makeup</h4>
                            <p>master make up artist</p>
                            <p>march 2009 - june 2009</p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>campus i12</h4>
                            <p>graphical artist</p>
                            <p>jan 2009 - march 2009</p>
                        </div>

                        <!--caption for desktop start-->
                        <div class="block-left__col block-left__col--20 border--left bg--2b desktop--only">
                            <div class="expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header">education</h4>
                        </div>
                        <!--caption for desktop end-->
                    </div>

                    <div class="block-left mobile--margin-top-15 bg--white" id="knowledge_container">
                        <!--caption for mobile start-->
                        <div class="desktop--hidden mobile--bg--2a">
                            <div class="mobile--expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header">Skills</h4>
                        </div>
                        <!--caption for mobile end-->

                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>Front end</h4>
                            <p>HTML</p>
                            <p>CSS</p>
                            <p>JavaScript</p>
                            <p>PHP</p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>3D</h4>
                            <p>Modelling</p>
                            <p>animation</p>
                            <p>rendering</p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>make up</h4>
                            <p>Bridal</p>
                            <p>fashion</p>
                            <p>VFX</p>
                            <p>body paint</p>
                        </div>
                        <div class="block-left__col block-left__col--20 bg--white mobile--border">
                            <h4>interests</h4>
                            <p>Board games</p>
                            <p>Video games</p>
                            <p>indoor climbing</p>
                            <p>acro yoga</p>
                        </div>

                        <!--caption for desktop start-->
                        <div class="block-left__col block-left__col--20 border--left bg--2b desktop--only">
                            <div class="expand-btn bg--white">
                                <div class="expand-arrow"></div>
                            </div>
                            <h4 class="mobile--header">Skills</h4>
                        </div>
                        <!--caption for desktop end-->
                    </div>


                    <!--top left side start-->
                    <div class="block-hz-split__col block-hz-split__col--75 bg--2a bg--dot mobile--margin-top-15 mobile--small-fill mobile--border mobile--border-top mobile--bg--2c">
                        <!--shall be empty-->
                    </div>
                    <!--top left side end-->

                    <!--top right side start-->
                    <div class="block-hz-split__col block-hz-split__col--25 bg--2c">
                        <!--shall be empty-->
                    </div>
                    <!--top right side end-->

                </div>
            </div>

            <div class="mobile--bg--2a mobile--border text--center" id="shareContainer">
                <?php
                    include 'social.php';    
                ?>
            </div>
        </div>
    </main>
    <!--Content end-->
    <?php
        include './includes/social.php';    
    ?>
</body>
</html>