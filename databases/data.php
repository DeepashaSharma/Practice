<?php
include_once('connection.php');
if(isset($_POST['submit']))//this is used to insert data in the database
{
	$n=$_POST['name'];
	$a=$_POST['age'];  
	$d=$_POST['dob'];
	$y=$_POST['year'];
	$s=$_POST['sem'];
	if(mysql_query("insert into f(name,Age,dob,year,sem) values('$n','$a','$d','$y','$s')"))
	{
		echo "submitted data!!!!!!";
	}		
		
}

/*if(isset($_POST['name'])&&($_POST['age'])&&($_POST['dob'])&&($_POST['year'])&&($_POST['sem'])) //we use and in btwn so if any value will not insert it will not work
{
	echo $_POST['name'];
	echo $_POST['age'];   //this code are simply use to show the inserted data on the same page we can also use or instead of and operation which allows blanks
	echo $_POST['dob'];
	echo $_POST['year'];
	echo $_POST['sem'];
						
}*/
?>
<html>
<body>
<form action="data.php" method="POST">
Name:<input type="text" name="name"><br>
Age:<input type="text" name="age"><br>
DOB:<input type="text" name="dob"><br>
Year:<input type="text" name="year"><br>
Sem:<input type="text" name="sem"><br>
<input type="submit" name="submit" value="submit">

</form>
</body>
</html>
