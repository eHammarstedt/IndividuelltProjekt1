<nav id="menu" role="navigation">
    <button id="menuBtn" class="desktop--hidden"><img src="img/menu.png"/></button>
    <ul class="borderStyle">
        
        <li id="homebtn" class="desktop--hidden">
            <a href="index.htm?id=page" id="active">
                Home
            </a>
        </li>
        <li>
            <a href="about.php?id=page">
                about
            </a>
        </li>
        <li>
            <a href="curriculum.php?id=page">
                curriculum
            </a>
        </li>
        <li id="nav-center-btn" class="desktop--only">
            <a class="btn--round" id="active" href="index.php?id=page1">
            </a> 
        </li>
        <li>
            <a href="portfolio.php?id=page">
                Portfolio
            </a>
        </li>
        <li>
        <a href="contact.php?id=page">
                contact
            </a>
        </li>
    </ul>
</nav>

<?php
if(isset($_GET['page'])){
	switch($_GET['page']) {
	  	

	  	break; case 'about.php':
	  		$page = 'about.php';

	  	break; case "curriculum.php":
 	  		$page = 'curriculum.php';
 		

	  	break; case "portfolio.php":
	  		$page = 'portfolio.php';
	

		break; case "contact.php":
			$page = 'contact.php';

		break; case "index.php":
  			$page = 'index.php';

  		default:
  			$page = 'index.php';


	  	}

	  	include = $page;
	} else {

		

	}
}
  
?>







