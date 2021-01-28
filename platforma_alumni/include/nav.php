<a href="<?php
        if(isset($_SESSION['logat']))
        {
            if($_SESSION['logat'])
                echo "home.php";

        }
        else
            echo "index.php";
        ?> "><img  src="obj/img/logo_aiesec.png"></a>
		<nav id="nav">
		<ul>
			<li id="profil"><a href ="#">Profil</a><span></span></li>
			<li id="cauta"><a href="#">Cauta</a><span></span></li>
			<li id="povesti"><a href="povesti.php">Povesti</a><span></span></li>
			<li id="despre"><a href="#">Despre platforma</a><span></span></li>
		</ul>
		</nav>