<?php

$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("studentarchive",$link) or die("can not select database");
		
		$name=$_POST['name'];
		$password=$_POST['password'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		
		
		$q="insert into register(name,password,phonenumber,email)
	    values ('$name','$password','$phonenumber','$email')";
		   
		mysql_query($q,$link)or die("wrong query");
		mysql_close($link);
		header("location:employerregister.php");
?>
