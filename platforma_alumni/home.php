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
/*
        <article class="article">
        <img src="obj/img/alumni/1.jpg">
        <h4><a href="profil?id=1">Racasan Vlad</a></h4>
        <h5>Alumn AIESEC Sibiu</h5>
        <h5 class="date">2011-2014</h5>
        </article>
  */
        if(!isset($_POST['submit']))
        {
            // nu e search activ
            $sql = "SELECT * FROM INFO_UTILIZATORI ORDER BY NUME ";
            $result = mysql_query($sql,$bazadedate);
            while($row = mysql_fetch_array($result,MYSQL_ASSOC))
            {
                $sql = " SELECT * FROM POZA WHERE ID_USER ='".$_SESSION['id_user']."'";
                $result2 = mysql_query($sql,$bazadedate);
                $row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
                $poza = "obj/img/alumni/".$row2['NUME'];
                $id= $row['ID_USER'];
                $numeprenume= $row['PRENUME']." ".$row['NUME'];

                echo "<article class=\"article\">";
                echo "<img src=\"".$poza."\">";
                echo "<h4><a href=\"profil.php?id=".$id."\">".$numeprenume."</a></h4>";



                $sql  = "SELECT TARA,COMITET_LOCAL as COMITET,MAX(PANA) AS MAX, MIN(DIN) AS MIN ,SUM( DATEDIFF( PANA, DIN ) ) AS SUMA FROM EXPERIENTA_AIESEC WHERE ID_USER =".$id." GROUP BY COMITET_LOCAL, ID_USER";
                $result2 = mysql_query($sql,$bazadedate);
               while( $row2 = mysql_fetch_array($result2,MYSQL_ASSOC))
                {
                    if($row2['SUMA']>180)
                    {
                        echo "<h5> Alumn AIESEC ".$row2['COMITET'].", ".$row2['TARA']."</h5>";
                        echo "<h5 class=\"date\">" .$row2['MIN']."  -  ".$row2['MAX']."</h5>";

                    }

                }
                echo "</article>";



            }
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