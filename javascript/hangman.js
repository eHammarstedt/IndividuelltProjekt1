var words = ["Elin", "Lakrits", "kokos"];
var randomNumber = Math.floor(Math.random() * words.length);
gameOver = false;
youWin = false;

$( document ).ready(function() {
	writeUnderscores(words[randomNumber]);
});


//If letter is pressed, start function
$(document).on('keyup', function(e){
	if (gameOver==false) {
		var keyPressed = e.keyCode || e.which;
		var letter = String.fromCharCode(keyPressed);

		if(keyPressed > 64 && keyPressed < 91){
			isLetterInWord(words[randomNumber],letter);
		}
	}
});

//Check if letter is in the word
function isLetterInWord(word, letter) {

	word = word.toLowerCase();
	letter = letter.toLowerCase();
	var wordLetters = word.split('');
	var didMatch = false;

	for (var i = 0; i < wordLetters.length; i++) {

		if(wordLetters[i] === letter){
			didMatch = true;
			PutLetterInPlace(letter, i)
		}
	}

	if (didMatch === false) {
		hangTheMan();
	}

	winGame(word);
}

function PutLetterInPlace(letter, i) {

	var underscoresString = $("#wordPlaceholder").text();
	var	underscoresArray = underscoresString.split('');
	underscoresArray[i] = letter;

	$("#wordPlaceholder").text(underscoresArray.join(""));
}

//Write out the correct length of "_" in DOM
function writeUnderscores(word){
	$("#wordPlaceholder").text("")
	var wordLetters = word.split('');
	$.each(wordLetters, function(){
		$("#wordPlaceholder").append("_");
	});
}

//Kills you if you are WRONG!
function hangTheMan(){
	$(".life.active").last().removeClass("active");
	if($(".life.active").length == 0){
		gameOver = true;
		toggleResetBtn();
		//make a game over text pop up
	}
}

//display "reset game" button
function toggleResetBtn(){
	if (gameOver==true || youWin==true) {
		$("#reset.hidden").removeClass("hidden");
		$("#reset").click(resetGame);	
	}
}

//reset game
function resetGame(){

	if(gameOver==true || youWin==true){

		randomNumber = Math.floor(Math.random() * words.length);
		writeUnderscores(words[randomNumber]);
		$(".life").addClass("active");
		$("#reset").addClass("hidden");
		gameOver=false;
		youWin=false;

	}
}

//check if win!
function winGame(word){
	if($("#wordPlaceholder").text() == word){
		youWin = true;
		toggleResetBtn();
		alert("you won madda fakka!");
	}
}


















