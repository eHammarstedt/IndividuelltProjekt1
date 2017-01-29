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
			<h2>Guess the animal before you lose</h2>
			<h2>You have only ten guesses...</h2>
		</div>
		<div id="hangman">
			<h3 id="gameOver" class="hidden">Game over!</h3>
			<h3 id="winner" class="hidden">Congrats! you did it!</h3>
			<button id="reset" class="hidden">Play it again Sam!</button>

			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<span class="life active"></span>
			<h3 id="wordPlaceholder"></h3>

			<h3 id="guessedLetter"></h3>
		</div>
	</div>
		
	<script type="text/javascript" src="javascript/hangman.js">
	</script>