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
                <div class="block-hz-split bg--3a">
                    <!--top left side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--3b scrollable">
                        <h1>Guestbook entries</h1>                    
                    <?php 
                        $getMsgFromDb = 'SELECT * FROM guestbook';

                        $result = $conn->query($getMsgFromDb);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                ?>
                                <div class="entries">
                                    <p class="gbName">
                                        <?php
                                            echo $row["name"];
                                        ?>
                                    <p>
                                    <p class="gbEmail">
                                        <?php
                                            echo $row["email"];
                                        ?>
                                    </p>
                                    <p class="gbMsg">
                                        <?php
                                            echo $row["message"];
                                        ?>
                                    </p>
                                </div>
                                <?php 
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                    </div>
                    <!--top left side end-->

                    <!--top right side start-->
                    <div class="block-hz-split__col block-hz-split__col--50 bg--dot bg--3a mobile--small-fill mobile--border mobile--bg--3b">
                        <!--shall be empty-->
                    </div>
                    <!--top right side end-->
                </div>
            </div>

            <div class="bg--white mobile--border mobile--border-top mobile--margin-top-15 text--center" id="shareContainer">
                <?php
                    include './includes/social.php';    
                ?>
            </div>
        </div>
    </main>