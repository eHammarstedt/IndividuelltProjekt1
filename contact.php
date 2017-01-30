<?php 
    
    $messageSent = false;
    $messageError = "";


    if (isset($_POST["firstname"]) && isset($_POST["email"]) && isset($_POST["message"]) ){

        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $sql = "INSERT INTO guestbook (message, email, name) 
        VALUES ('{$message}', '{$email}', '{$firstname}')";


        if (mysqli_query($conn, $sql)) {

        } else {
            $messageError = "something went wrong..";
        }

        $messageSent = true;
    }
?>

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
                            <span class="<?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_contactTitle?>"><?php echo getTextFromDb($textId_contactTitle)?></span>
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
                                <h3 class="mobile--padding-top-15 <?php if(loggedIn()){echo "editable-text";}?>" id="workTogetherCaption" data-text-id="<?php echo $textId_contactWork?>"><?php echo getTextFromDb($textId_contactWork)?></h3>
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
                            <div class="block-hz-split__col block-hz-split__col--50 bg--3b mobile--bg--3c mobile--medium-fill mobile--border">
                                <?php if ($messageSent == true){?>
                                    <?php if ($messageError != ""){
                                       echo $messageError;
                                    } else {?>
                                        <p id="thxForMsg">Thanks for your message, I'll come back to you!</p>
                                    <?php } ?>
                                <?php } else {?>
                                <p class="text--center whiteHeader <?php if(loggedIn()){echo "editable-text";}?>" data-text-id="<?php echo $textId_contactMsg?>"><?php echo getTextFromDb($textId_contactMsg)?></p>
                                <form method="post">
                                    <input type="text" name="firstname" placeholder="Name">
                                    <input type="text" name="email" placeholder="example@mail.com">
                                    <textarea name="message" placeholder="Message"  class="textMsg"></textarea>
                                    <input type="submit" value="Send" class="submitBtn">
                                </form>
                                <?php } ?>
                            </div>
                            <div class="block-hz-split__col block-hz-split__col--50 bg--3c">
                            
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