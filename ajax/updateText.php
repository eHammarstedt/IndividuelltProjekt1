<?php 
	include('../admin/tools.php');
	include('../DB/config.php');

	$itWentOkey = false;

    if (loggedIn() && isset ($_POST["id"]) && isset ($_POST["content"])){

        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        $sql = "UPDATE pageTexts
			SET content = '{$content}'
			WHERE id = {$id}";

        if (mysqli_query($conn, $sql)) {
        	$itWentOkey=true;
        }
    }
    if($itWentOkey){
	    http_response_code(200);
    }else{
	    http_response_code(400);
	}
?>