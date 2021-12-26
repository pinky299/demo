<?php

	$con=mysql_connect("localhost","root","");
	if(!$con)
	{

		die('could not connect'.mysql_error());
	}
	mysql_select_db("student1",$con);


	$sql = "insert into jmobile1(firstname,lastname,email,age)
 values('$_POST[fn]','$_POST[ln]','$_POST[myemail]','$_POST[slider]')";


	if(!mysql_query($sql,$con))
	{
		die('Error :'.mysql_error());
	}

	echo "One record Added";
	mysql_close($con);


?>