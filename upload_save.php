<?php
session_start();
if (isset($_SESSION['new']))
{
$n=$_SESSION['new'];
echo '<a href="upload/'.$n.'"><img src="upload/'.$n.'"/></a>';
}




?>