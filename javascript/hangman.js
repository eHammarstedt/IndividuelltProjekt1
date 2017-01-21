var words = ["Elin","Lakrits"];
var randomNumber = Math.floor(Math.random() * words.length);

$( document ).ready(function() {
	writeWord(words[randomNumber]);
});

//skriv ut _ i DOM
function writeWord(word){
	var wordLetters = word.split('');
	$.each(wordLetters, function(){
		$("#wordPlaceholder").append("_");
	});
}

//kör en funtion när man klickar på en tangent
$(document).on('keyup', function(e){

	var keyPressed = e.keyCode || e.which;
	var letter = String.fromCharCode(keyPressed);
	var lakrits="";

	if(keyPressed > 64 && keyPressed < 91)
		lakrits = isLetterInWord(words[randomNumber],letter);
		console.log(letter + " in " + words[randomNumber] + "? " + lakrits);
});

//Kollar om bokstav finns i ordet
function isLetterInWord(word, letter) {

	word = word.toLowerCase();
	letter = letter.toLowerCase();
	var wordLetters = word.split('');
	
	for (var i = wordLetters.length - 1; i >= 0; i--) {

		if(wordLetters[i] === letter){
			whereToPUSH(letter, i)
			return true;
		} 
	}
	return false;
}

//koll vafan skiten ligger i längen på ordet 
function whereToPUSH(letter, i) {

	var underscoresString = $("#wordPlaceholder").text();
	var	underscoresArray = underscoresString.split('');
	underscoresArray[i] = letter;

	$("#wordPlaceholder").text(underscoresArray.join(""));
}


//byt ut rätt _ med rätt bokstav 
	























