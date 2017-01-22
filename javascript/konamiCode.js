var codeArray = []
var timeout = null;
var timer = 1000;

$(document).on('keyup', function (e) {
    if(timeout) clearTimeout(timeout);
    var keyPressed = e.keyCode;
    (keyPressed > 12 && keyPressed < 67) ? codeArray.push(keyPressed) 
                                         : codeArray = [];
    console.log(codeArray.join('-'));
    if (codeArray && codeArray.length === 11) {
        if (codeArray[0] === 38 && codeArray[1] === 38 
        	&& codeArray[2] === 40 && codeArray[3] === 40
        	&& codeArray[4] === 37 && codeArray[5] === 39
        	&& codeArray[6] === 37 && codeArray[7] === 39
        	&& codeArray[8] === 66 && codeArray[9] === 65
        	&& codeArray[10] === 13) {
            window.location.href = "?page=hangman";
            timer = 2000;
        }
    } 
    timeout = setTimeout(reset, timer);
});

function reset() {
    timer =1000;
    codeArray = [];
}