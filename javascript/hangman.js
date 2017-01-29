var words = ["Elin", "Lakrits", "kokos","Addax","Aguti","Ammon","Ariel","Bison","Bitch","Bobac","Bobak","Bongo","Brock","Bruin","Burro","Camel","Canis","Chimp","Chiru","Civet","Coati","Coney","Coypu","Crone","Cuddy","Daman","Dhole","Dingo","Dogie","Drill","Eland","Equus","Felis","Filly","Fitch","Fossa","Gayal","Genet","Goral","Grice","Gryce","Hinny","Hippo","Horse","Hutia","Hyena","Hyrax","Indri","Izard","Jocko","Kaama","Kiang","Koala","Kulan","Kyloe","Lemur","Liger","Llama","Loris","Magot","Manis","Manul","Mhorr","Moose","Morse","Mouse","Nagor","Nyala","Okapi","Orang","Oribi","Otary","Otter","Ounce","Panda","Pekan","Phoca","Pongo","Potto","Puppy","Ratel","Rhino","Royal","Sable","Saiga","Sajou","Sasin","Serow","Sheep","Shoat","Shote","Shrew","Skunk","Sloth","Sorel","Spade","Spado","Steer","Stirk","Stoat","Swine","Tabby","Takin","Tapir","Tatou","Tiger","Tigon","Urial","Urson","Vison","Vixen","Whale","Whelp","Yapok","Zebra","Zerda","Zibet","Zoril","Zorro"];
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
		showCorrectWord(words[randomNumber]);
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
		$("#gameOver").addClass("hidden");
		gameOver=false;
		youWin=false;

	}
}

//check if hir won!
function winGame(word){
	if($("#wordPlaceholder").text() == word){
		youWin = true;
		toggleResetBtn();
		alert("you won madda fakka!");
	}
}


//if you lose, show the correct word
function showCorrectWord(word){
	if(gameOver==true){
		$("#wordPlaceholder").text(word)
		$("#gameOver").removeClass("hidden")
	}
}

//display guessed letters 

















