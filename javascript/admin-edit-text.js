$( document ).ready(function() {
	var clickThis;
	clickThis = function(){

		var textarea = $("<textarea></textarea>");
		textarea.addClass("editText")
		textarea.val( $(this).text() );
		textarea.css({
			"font-family": $(this).css("font-family"),
			"font-size": $(this).css("font-size"),
			"font-weight": $(this).css("font-weight"),
			"text-align": $(this).css("text-align"),
			"width": $(this).outerWidth() + 30,
			"height": $(this).outerHeight(),
			"text-transform": $(this).css("text-transform"),
			"margin-top": $(this).css("margin-top"),
			"margin-right": $(this).css("margin-right"),
			"margin-bottom": $(this).css("margin-bottom"),
			"margin-left": $(this).css("margin-left"),
		});
		var originalElement = $(this).replaceWith(textarea);
		textarea.focus();


		textarea.blur(function(){
			originalElement.text(textarea.val());
			$(this).replaceWith(originalElement);

			originalElement.click(clickThis);
			var textId = originalElement.data("text-id");
			updateOnServer(textId,textarea.val());
		});
	}

	$(".editable-text").click(clickThis);

    console.log( "I'm invincible!!" );

    function updateOnServer(id,content){
    	$.ajax({
    		url:"ajax/updateText.php",
    		method:"POST",
    		data:{
    			id:id,
    			content:content,
    		},

    	})
    	.done(function(){
    		console.log("it went okey");
    	})
    	.fail(function(){
    		console.log("meh...");
    	})

    }
});



















