<?php session_start();
include "include/connect.php";
if(isset($_SESSION['logat']))
        {
            if($_SESSION['logat'])
				header('location:home.php');
		}
			
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="obj/css/style.css">


</head>
<body>
<div class="header">
	<div class="wrapper">
        <a href="<?php
        if(isset($_SESSION['logat']))
        {
            if($_SESSION['logat'])
                echo "home.php";
			
        }
        else
            echo "index.php";
        ?> "><img  src="obj/img/logo_aiesec.png"></a>
		<?php include "include/nav_secund.php";?>

	</div>
</div>


<div class="more clear">
<?php include "include/slideshow.php";?>
	</div>
	<div class="wrapper ">
		<h3 class="center padding">Platforma pentru <span>Alumni AIESEC Romania</span><br> pentru a avea acces la continut trebuie sa va logati</h3>
	</div>

	<footer class="footer">
		<div class="wrapper">
		<p>@copyright AIESEC ROMANIA</p>	
		</div>
	</footer>


<?php include "include/script_js.php";?>
</body>

</html>