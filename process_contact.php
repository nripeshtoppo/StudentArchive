<?php

$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("studentarchive",$link) or die("can not select database");
		
		$name=$_POST['name'];
                $email=$_POST['email'];
                $query=$_POST['query'];
		
		
		$q="insert into contact(name,email,query)
	    values ('$name','$email','$query')";
		   
		mysql_query($q,$link)or die(mysql_error());
		mysql_close($link);
		header("location:Contact.php");
?>
