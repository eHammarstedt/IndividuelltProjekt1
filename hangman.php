<body>  
	<!--Menu Start-->
    <header>
        <?php
            include './includes/menu.php';
        ?>
    </header>
    <!--Menu end-->
	<div id="container">
		<div id="rules">
			<h1>HANGMAN!</h1>
			<h2>Guess the word or else you lose!</h2>
		</div>
		<div id="hangman">
			<h2>You have five guesses...</h2>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<h3 id="wordPlaceholder"></h3>
			<button id="reset" class="hidden">Play it again Sam!</button>
		</div>
	</div>
		
	<script type="text/javascript" src="javascript/hangman.js">
	</script>