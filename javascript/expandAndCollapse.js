
var btnParentToggle = document.getElementsByClassName("block-left");

for (var i = 0; i < btnParentToggle.length; i++) {
	var blockLeft = btnParentToggle[i];
	setupExpandableBlock(blockLeft);
};

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
