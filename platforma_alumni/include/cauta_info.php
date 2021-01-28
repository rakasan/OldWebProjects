<div id="cauta_info">
<div class="wrapper">
	<h2>Cauta alumni</h2>

	<form class="form_sign clear" method="POST" action ="profil_cautat.php"> 
        <div class="inp"><input type="search" name="search"/><img class="search" src="obj/img/zoom.png"/></div><br/>
        <input  class="left"  type ="submit" name = "submit" value = "CAUTA" />
<div class="clear expend">
<?php
$nr = 0;
$mysql  = "SELECT * FROM HELPER_DOMENIU_ACTIVITATE";
$result =  mysql_query($mysql,$bazadedate);
while($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
    $id = $row['ID_ACTIVITATE'];
    $nume = $row['NUME'];
    if($nr%5==0)
         echo "<div class = \"one left\">";
    echo "<div class=\"inp\"><label>" . $nume . "</label><input type=\"checkbox\" name=\"" . $nume . "\" value=\"" . $id . "\"/> </div>"; 
    $nr++;
      if($nr % 5 == 0)
      {
        echo "<hr/>";
        echo "</div>";
      }
}
      if($nr % 5 != 0)
        echo "</div>";

//<div class="inp"><label>Marketing</label><input type="checkbox" name="marketing" value="marketing" /> </div>
?>
</div>
    </form>
	
</div>
</div>