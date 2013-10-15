<?php 
session_start();
$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("studentarchive",$link) or die("Cant select db");
	
	$q = "select * from register where name = '".$_POST['unm']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
        
if(empty($_POST))
{
	exit;
}

if(empty($_POST['unm'])||empty($_POST['pwd']))
{
	echo "You must enter all fields";
}

	
	if(!empty($row))
	{
		if($_POST['pwd']==$row['password'])
		{
			//login
			$_SESSION = array();
			$_SESSION['unm']=$row['name'];
                       
			
			header("location:home.php");
		}
		else
		{
			echo "Wrong Password .";
		}
	}
	else
	{
		echo "No Such User";
	}

?>