<?php
session_start();
include "connect.php";
$allowedExts = array("GIF", "JPEG", "JPG", "PNG");
$extension = end(explode(".", $_FILES["file"]["name"]));
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        $id_poza = sha1($_SESSION['id_user'].$_FILES["file"]["name"].$_FILES["file"]["size"]).".".$extension;
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

        if (file_exists("obj\\img\\alumni\\" . $id_poza))
            unlink("obj\\img\\alumni\\" . $id_poza);
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "obj\\img\\alumni\\" . $id_poza);
            echo "Stored in: " . "obj\\img\\alumni\\" . $id_poza;
            $_SESSION['poza']  =  "obj\\img\\alumni\\" . $id_poza;
            $sql = "UPDATE poza SET NUME='".$id_poza."' WHERE ID_USER = '".$_SESSION['id_user']."' ;";
           $result =  mysql_query($sql,$bazadedate);
            if($result)
                echo "update complet";
        }
    }
	
	 $redir = $_SESSION['redir'];
     header('Location:'.$redir);
?>