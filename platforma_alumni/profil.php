<?php
include "include/connect.php";
session_start();

    if(isset($_GET['id']))
        $id_cautat = $_GET['id'];
    else
        header('location:home.php');
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
</div>
<?php include "include/despre_info.php";?>
 <?php include "include/profil_info.php";?>
<?php include "include/cauta_info.php";?>

<div class="more clear">
    <?php include "include/slideshow.php";?>
    </div>
    <div class="wrapper ">
<div id="profil_info_cautat">
        <?php
        $sql = " SELECT *FROM INFO_UTILIZATORI  WHERE ID_USER ='".$id_cautat."'";
        $result = mysql_query($sql,$bazadedate);
        $row = mysql_fetch_array($result,MYSQL_ASSOC);

        //   <ul class="left">
        echo "<ul class=\"left\">";

        //      <li class="profile">Racasan Vlad <span>edit</span></li>
        echo "<li class=\"profile\">".$row['PRENUME']." ".$row['NUME']."</li>";

        //		<li>22.11.1989 <span>edit</span></li>
        echo "<li>".$row['DATA_NASTERI']." </li>";

        //		<li>Roman <span>edit</span></li>
        echo "<li>".$row['NATIONALITATE']." </li>";

        //		<li>Sibiu <span>edit</span></li>
        echo "<li>".$row['ORAS_CURENT']." </li>";

        //	    <li>Romania<span>edit</span></li>
        echo "<li>".$row['TARA_CURENTA']." </li>";

        //		<li class="telefon">0752229631<span>edit</span></li>
        echo "<li class = \"telefon\">".$row['NUMAR_TELEFON']." </li>";

        //		<li class="mail">racasan.vlad@gmail.com <span>edit</span>
        echo "<li class = \"mail\">".$row['ADRESA_EMAIL']." </li>";

        //		<li class="skype">racasanvlad <span>edit</span></li>
        echo "<li class = \"skype\">".$row['SKYPE']." </li>";

        //		<li class="facebook">Racasan Vlad<span>edit</span></li>
        echo "<li class = \"facebook\">".$row['TWITTER']." </li>";

        //		<li class="linkedin">Racasan Vlad<span>edit</span></li>
        echo "<li class = \"linkedin\">".$row['ID_LINKTIN']." </li>";

        //	    </ul>
        echo "</ul>";


        $sql = " SELECT * FROM POZA WHERE ID_USER ='".$id_cautat."'";
        $result2 = mysql_query($sql,$bazadedate);
        $row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
        $poza = "obj/img/alumni/".$row2['NUME'];
        //	    <img src="obj/img/alumni/1.jpg">
        echo "<img src =\"".$poza."\">";

        //	    <ul>
       

        //		<h2>Educatie</h2>
        echo "<h2>Educatie</h2>";

        //		<li>Inginer IT, Universitatea Lucian Blaga Sibiu, 2009-2013 <span>edit</span></li>
        //		<li>Mate-Info,Liceul Teoretic Onisifor Ghibu, Sibiu 2005-2009 <span>edit</span></li>
        //		<li>Scoala generala nr 13, Sibiu 2001-2005 <span>edit</span></li>
        echo "<ul>";
        $sql = " SELECT ID_USER,CALIFICARE,INSTITUTIE, YEAR(DATA_ADMITERE) AS DATAA,YEAR(DATA_ABSOLVIRE) AS DATAB  FROM EDUCATIE  WHERE ID_USER ='".$id_cautat."'";
        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<li>".$row['CALIFICARE'].", ".$row['INSTITUTIE'].", ".$row['DATAA']."-".$row['DATAB']." </li>";
        }

        //	</ul>
        echo "</ul>";

        //	<h2>Loc de munca</h2>
        echo "<h2>Loc de munca</h2>";
        //	<ul>
        echo "<ul>";

        //		<li>Dezvoltator web, Webia, 01.08.2011-01.12.2011 <span>edit</span></li>
        $sql = " SELECT *  FROM EXPERIENTA_DE_MUNCA  WHERE ID_USER ='".$id_cautat."'";
        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<li>".$row['POZITIE'].", ".$row['INSTITUTIE'].", ".$row['DIN']."-".$row['PANA']."</li>";
        }

        //	</ul>
        echo "</ul>";

        //	<h2>Pozitii in AIESEC</h2>
        echo "<h2>Pozitii in AIESEC</h2>";

        //	<ul>
        echo "<ul>";

        //		<li>OC Comm & Design ITTT 2012, Sibiu,Romania 10.06.2012-03.09.2012 <span>edit</span></li>
        $sql = " SELECT *  FROM EXPERIENTA_AIESEC  WHERE ID_USER ='".$id_cautat."'";
        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<li>".$row['POZITIE'].", ".$row['COMITET_LOCAL'].", ".$row['TARA'].", ".$row['DIN']."--".$row['PANA']." </li>";
        }



        //	</ul>
        echo "</ul>";

        //	<h2>Expertize</h2>
        echo "<h2>Expertize</h2>";

        //	<ul class="expertise">
        echo "<ul class=\"expertise\">";

        //		<li>Marketing</li>
        $sql = " SELECT *  FROM DOMENIU_DE_ACTIVITATE DOM, HELPER_DOMENIU_ACTIVITATE HELPER   WHERE DOM.ID_ACTIVITATE = HELPER.ID_ACTIVITATE  AND DOM.ID_USER ='".$id_cautat."'";

        $result = mysql_query($sql,$bazadedate);
        while($row = mysql_fetch_array($result,MYSQL_ASSOC))
        {
            echo "<li>".$row['NUME']."</li>";
        }

        //	</ul>
        echo "</ul>";
        ?>
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