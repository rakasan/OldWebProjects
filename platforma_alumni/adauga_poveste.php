<?php
include "include\connect.php";
session_start();
redirectlogin();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="obj/css/style.css">


</head>
<body>
<div class="header">
	<div class="wrapper">
        <?php include "include/nav.php";?>
		<?php include "include/nav_secund.php";?>

	</div>
</div>

<?php include "include/despre_info.php";?>
 <?php include "include/profil_info.php";?>
<?php include "include/cauta_info.php";?>
<div class="more clear">
	<?php include "include/slideshow.php";?>
	</div>
	<div class="wrapper ">




<div class="adauga_pov">
	<form method="POST" action="adauga_poveste.php">
	<h5>Titlu</h5> <input type="text" name="titlu"/> 

<textarea class="ckeditor" name="editor_poveste"></textarea>
<button type="submit">Trimite</button>
</form>
</div>


	</div>

	<footer class="footer clear">
		<div class="wrapper">
		<p>@copyright AIESEC ROMANIA</p>	
		</div>
	</footer>


<?php include "include/script_js.php";?>
</body>

</html>