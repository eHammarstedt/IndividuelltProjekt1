var body = document.documentElement;

var menuButton = document.getElementById("menuBtn");
menuButton.addEventListener("click", toggleMenu);

var isMenuOpen = false;
function toggleMenu(){
	if (isMenuOpen){
		isMenuOpen = false;
		body.classList.remove("menu--open");
	}
	else{
		isMenuOpen = true;
		body.classList.add("menu--open");
	}
}