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

<?php
$search = mysql_real_escape_string($_POST['search']);
$rezultat_search = "";
//session_start();
//phpinfo();
//include "connect.php";
$categorii_selectate = 0;

                $sql = "SELECT DISTINCT * FROM INFO_UTILIZATORI WHERE (UPPER(NUME) LIKE UPPER('%".$search."%') OR UPPER(PRENUME) LIKE UPPER('%".$search."%')) ";
                $sort = "ORDER BY NUME";
                $mysql  = "SELECT * FROM HELPER_DOMENIU_ACTIVITATE";
                $result =  mysql_query($mysql,$bazadedate);
                $sql2 = "";
                while($row = mysql_fetch_array($result,MYSQL_ASSOC))
                {
                    $id = $row['ID_ACTIVITATE'];
                    $nume = $row['NUME'];
                    $nume = str_replace(" ","_",$nume);
                    
                    if(isset($_POST[$nume]))
                        {
                        $categorii_selectate = 1;
                        $mysql2 = "SELECT * FROM domeniu_de_activitate where ID_ACTIVITATE ='".$id."';" ;
                       
                        $rezultat = mysql_query($mysql2,$bazadedate);
                            while($row5 = mysql_fetch_array($rezultat,MYSQL_ASSOC))
                            {
                                
                                $sql2= $sql2.$row5['ID_USER'].", ";
                            }
                        }
                }
                
                
                if($categorii_selectate !=0)
                {
                    $sql2= $sql2."0";
                    $sql = $sql. " AND ID_USER IN (".$sql2.") ";
                }

                   $sql = $sql.$sort;
                
                $result = mysql_query($sql,$bazadedate);
                while($row = mysql_fetch_array($result,MYSQL_ASSOC))
                {
                    $sql = " SELECT * FROM POZA WHERE ID_USER ='".$_SESSION['id_user']."'";
                    $result2 = mysql_query($sql,$bazadedate);
                    $row2 = mysql_fetch_array($result2,MYSQL_ASSOC);
                    $poza = "../obj/img/alumni/".$row2['NUME'];
                    $id= $row['ID_USER'];
                    $numeprenume= $row['PRENUME']." ".$row['NUME'];

                    $rezultat_search .= "<article class=\"article\">";
                    $rezultat_search .= "<img src=\"".$poza."\">";
                    $rezultat_search .= "<h4><a href=\"profil.php?id=".$id."\">".$numeprenume."</a></h4>";



                    $sql  = "SELECT TARA,COMITET_LOCAL as COMITET,MAX(PANA) AS MAX, MIN(DIN) AS MIN ,SUM( DATEDIFF( PANA, DIN ) ) AS SUMA FROM EXPERIENTA_AIESEC WHERE ID_USER =".$id." GROUP BY COMITET_LOCAL, ID_USER";
                    $result2 = mysql_query($sql,$bazadedate);
                    while( $row2 = mysql_fetch_array($result2,MYSQL_ASSOC))
                    {
                        if($row2['SUMA']>180)
                        {
                            $rezultat_search .= "<h5> Alumn AIESEC ".$row2['COMITET'].", ".$row2['TARA']."</h5>";
                            $rezultat_search .= "<h5 class=\"date\">" .$row2['MIN']." . ".$row2['MAX']."</h5>";

                        }

                    }
                    $rezultat_search .= "</article>";
                }
        
echo $rezultat_search ;
      
        
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