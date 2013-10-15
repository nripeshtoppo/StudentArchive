<?php
session_start();
/*if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  header('location:upload_save.php');
  
  }*/
$name=$_FILES['file']['name'];
	$tmp=$_FILES['file']['tmp_name'];
	
	$arr=explode(".",$name);
   $_SESSION['new']=$new=time().".".$arr[1];
	move_uploaded_file($tmp,'upload/'.$new);
        header('location:upload_save.php');
?> 