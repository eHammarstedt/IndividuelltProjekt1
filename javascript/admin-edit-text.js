$( document ).ready(function() {
	var clickThis;
	clickThis = function(){

		var textarea = $("<textarea></textarea>");
		textarea.val( $(this).text() );
		var originalElement = $(this).replaceWith(textarea);
		textarea.focus();


		textarea.blur(function(){
			originalElement.text(textarea.val());
			$(this).replaceWith(originalElement);

			originalElement.click(clickThis);
		});
	}

	$(".editable-text").click(clickThis);

	console.log("version0.1");
    console.log( "I'm invincible!!" );
});