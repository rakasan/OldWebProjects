<?php
include "connect.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {
	$user = mysql_real_escape_string(stripslashes($_POST["user"]));
	$pass = sha1($_POST["pass"]);

	$sql="SELECT * FROM login WHERE user = '$user' AND pass='$pass'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);

	if ($count > 0){
		$preluate = mysql_fetch_array($result);
		
		session_start();
		$_SESSION['user'] = $preluate['user'];
		$_SESSION['pass'] = $preluate['pass'];
		$_SESSION['tip'] = $preluate['type'];
		$_SESSION['id']=$preluate['id'];
		
		$_SESSION['tip']; 
		if($_SESSION['tip'] == 1){ 
			$redirect = 'admin.php';
		} elseif($_SESSION['tip'] == 2){
			$redirect = 'user.php';
		}
	} else {
		$redirect = 'index.php?error=1';
	}
} else {
	$redirect = 'index.php?error=2';
}
header ("Location: $redirect");
exit;
?>