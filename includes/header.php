<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "induvidualProject"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

    $query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
            mysql_real_escape_string($username),
            mysql_real_escape_string($password));
?>


<!DOCTYPE html>
<html lang="en" class="borderStyleEdge">
<head>
    <title>Elin - Front end developer</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Elin Hammarstedt's portfolio - Startpage" /> 
    <meta name="author" content="Elin Hammarstedt">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,500,700,900" rel="stylesheet">
    <!--stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/generalStyle.css" />
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <link rel="stylesheet" type="text/css" href="css/tablet.css" />
    <link rel="stylesheet" type="text/css" href="css/desktop.css" />
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

</head>