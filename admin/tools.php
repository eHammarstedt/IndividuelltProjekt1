<?php
    // each client should remember their session id for EXACTLY 15 minutes
    session_set_cookie_params(900);

    session_start();

	function loggedIn(){
	return isset($_SESSION["loggedin"]);
	}

?>