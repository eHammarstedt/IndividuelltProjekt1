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
            <h1>
                Hej snygging! <br/>
                Logga in om du är The chosen one, <br/>
                annars kan du dra åt sjumilaskogen!
            </h1>
            <form method="post">
                <input type="text" name="username"/>
                <input type="password" name="password"/>
                <button type="submit" class="loginBtn">Login</button>
                <p class="error">
                    <?php 
                        echo $loginError;
                    ?>
                </p>
            </form>
        </div>
    </main>