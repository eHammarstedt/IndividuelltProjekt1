
/*
var btnParentToggle = document.getElementsByClassName("block-left");

for (var i = 0; i < btnParentToggle.length; i++) {
	var blockLeft = btnParentToggle[i];
	setupExpandableBlock(blockLeft);
}

function setupExpandableBlock(block){
	var expandBtn = blockLeft.querySelector(".expand-btn");
	expandBtn.addEventListener("click", function(){
		block.classList.toggle("block-left--open");
	});

	var mobileExpandBtn = blockLeft.querySelector(".mobile--expand-btn");
	mobileExpandBtn.addEventListener("click", function(){
		block.classList.toggle("mobile--block--open");
	});
}
*/

$('.block-left').each(function(){
	var blockLeft = $(this);
	setupExpandableBlock(blockLeft);
});

function setupExpandableBlock(block){
	var expandBtn = block.find(".expand-btn");
	expandBtn.click(function(){
		block.toggleClass("block-left--open");
	});
	var mobileExpandBtn = block.find(".mobile--expand-btn");
	mobileExpandBtn.click(function(){
		block.toggleClass("mobile--block--open");
	});
}
