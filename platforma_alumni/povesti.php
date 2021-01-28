<?php
include "include/connect.php";
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

<?php
// <article class="article by">
//		<h4>O excursie prin Turcia</h4>
//			<h5>22.05.2011</h5>
//			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec aliquam libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec aliquam libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
//			<h5><a href="povesti?id=1">Citeste mai multe</a></h5>
//			<img class="by" src="obj/img/alumni/1.jpg"/><h6>Racasan Vlad</h6>
//          </article>
//
        $sql = "SELECT * FROM POVESTI";
        $result = mysql_query($sql,$bazadedate);
          while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            $id_user = $row['ID_USER'];
            $titlu = $row['TITLU'];
            $text = substr($row['TEXT'],0,350)."...";
            $data = $row['DATA'];
            $id_pov = $row['ID_POVESTE'];


            $sql2= "SELECT * FROM INFO_UTILIZATORI WHERE ID_USER=".$id_user.";";
            $result2 = mysql_query($sql2,$bazadedate);
            $row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
            $nume = $row2['PRENUME']." ".$row2['NUME'];

            $sql2= "SELECT * FROM POZA WHERE ID_USER=".$id_user.";";
            $result2 = mysql_query($sql2,$bazadedate);
            $row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
            $poza = "obj/img/alumni/".$row2['NUME'];


            echo "<article class=\"article by\" >";
              echo "<h4>".$titlu."</h4>";
             //  echo "<h5>".$data."</h5>";
               echo "<p>".$text."</p>";
               echo "<h5><a href=\"poveste.php?id=".$id_pov."\">Citeste mai mult</a></h5>";
                echo "<img class=\"by\" src=\"".$poza."\" /><h6>".$nume."</h6>";
            echo "</article>";
        }
       ?>


	</div>

	<footer class="footer clear">
		<div class="wrapper">
		<p>@copyright AIESEC ROMANIA</p>	
		</div>
	</footer>


<?php include "include/script_js.php";?>
</body>

</html>