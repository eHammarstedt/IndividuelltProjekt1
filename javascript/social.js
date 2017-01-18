//function share (url){
//	window.open(url, null, "width=500, height=300, menubar=no, location=no, resizable=yes, scrollbars=yes");
//}


$(".share-btn").click(function(){
	var url = $(this).data("url");
	url = url.replace("{docURL}", encodeURIComponent(document.URL))
	url = url.replace("{docTitel}", encodeURIComponent(document.title))
	window.open(url, null, "width=500, height=300, menubar=no, location=no, resizable=yes, scrollbars=yes");
})