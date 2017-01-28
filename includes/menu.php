<nav id="menu" role="navigation">
    <button id="menuBtn" class="desktop--hidden"><img src="img/menu.png"/></button>
    <ul class="borderStyle">
        <?php if(loggedIn()){?>
            <li>
                <a href="?page=guestbook">
                    guestbook
                </a>
            </li>
        <?php }?>
        <li id="homebtn" class="desktop--hidden">
            <a href="?page=" id="active">
                Home
            </a>
        </li>
        <li>
            <a href="?page=about">
                about
            </a>
        </li>
        <li>
            <a href="?page=curriculum">
                curriculum
            </a>
        </li>
        <li id="nav-center-btn" class="desktop--only">
            <a class="btn--round" id="active" href="?page=">
            </a> 
        </li>
        <li>
            <a href="?page=portfolio">
                Portfolio
            </a>
        </li>
        <li>
        <a href="?page=contact">
                contact
            </a>
        </li>
        <?php if(loggedIn()){?>
            <li>
                <p id="loggedIn">Logged in as admin</p>
            </li>
        <?php }?>
    </ul>
</nav>