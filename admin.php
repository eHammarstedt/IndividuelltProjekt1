<?php   
    include('./admin/tools.php');
    include('./includes/header.php');
    include('./DB/config.php');

    $loginError = "";

    if(loggedIn()){
        header("Location: index.php");
    }
    if (isset ($_POST["username"])){
        if ($_POST ["username"] == "commander" && $_POST ["password"] == "lakrits"){
            $_SESSION["loggedin"] = true;
            header("Location: index.php");
        }else{
            $loginError = "Wrong username or password...";
        }

    }

    include ('./admin/login.php');
    
    


    include('./includes/footer.php');
?>