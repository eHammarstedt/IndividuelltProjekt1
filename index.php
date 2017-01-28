<?php 
    include('./admin/tools.php');
    include('./includes/header.php');
    include('./DB/config.php');

    if (empty($_GET["page"])) {
        $page = "start";
    }else{
        $page = $_GET["page"];
    }
    
    switch ($page) {
        case "guestbook":
            include ('guestbook.php');
            break;
        case "about":
            include ('about.php');
            break;

        case "contact":
            include('contact.php');
            break;

        case "curriculum":
            include ('curriculum.php');
            break;

        case "portfolio":
            include ('portfolio.php');
            break;

        case "hangman":
            include ('hangman.php');
            break;

        default:
            include ('start.php');
    }


    include('./includes/footer.php');
?>