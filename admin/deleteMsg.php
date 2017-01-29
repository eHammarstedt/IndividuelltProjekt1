<?php
	include('../admin/tools.php');
	include('../DB/config.php');

    if(loggedIn() && isset($_POST["msgId"])){

        $msgId = mysqli_real_escape_string($conn, $_POST['msgId']);

        $sql = "DELETE FROM guestbook WHERE id = {$msgId}";

        if (mysqli_query($conn, $sql)) {
        	header("Location: ../index.php?page=guestbook");
        } else {
            echo "something went wrong..";
        }
    }else{
    	header("Location: ../index.php");
    }
?>