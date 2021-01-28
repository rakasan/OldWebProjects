<div clas="nav_secund">
		<ul>
		<li class="right user"><img src="obj/img/profile.png">
			<ul >
                <?php
                if(isset($_SESSION['logat']))
                {
                if($_SESSION['logat'])
                    {
                    echo "<li class=\"graduate\"><a href=\"adauga_poveste.php\"><img src=\"obj/img/graduate.png/\">Adauga poveste</a></li>";
		        	echo "<li class=\"key\"><a href=\"sign_out.php\"><img src=\"obj/img/key.png\">Delogare</a></li>";
                    }
                }
                else
                    {
                    echo "<li class=\"graduate\"><a href=\"sign_up.php\"><img src=\"obj/img/graduate.png\">Inscriere</a></li>";
				    echo "<li class=\"key\"><a href=\"sign_in.php\"><img src=\"obj/img/key.png\">Logare</a></li>";
		             }
                ?>
				</ul>
		</li>
		</ul>
	</div>