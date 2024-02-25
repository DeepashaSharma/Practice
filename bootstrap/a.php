<html lang="en">
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>
<style>
#navigation
{
	background-color:rgba(218,112,214,0.7);
	height:80;
	width:1200;
	
}
#logo
{
	background-color:"white";
	height:120;
	width:1200;
}
#intro
{
    background-color:rgba(218,112,214,0.7);
	height:700;
	width:1200;
}
input[type=password]
{
    -moz-border-radius:6px;
	border-radius:6px;
    h*eight:30;
	width:180;
}
input[type=submit]
{
    -moz-border-radius:6px;
	border-radius:6px;
    height:30;
	width:100;	
}
input[type=reset]
{
    -moz-border-radius:6px;
	border-radius:6px;
	height:30;
	width:100;

}
</style>
</head>
<body background="Images/1.jpg">
<center>
<div id="navigation">
<font size=5px>
<a href="Home.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-home"><br>Home</span></a>&nbsp;
<a href="Register.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-earphone"><br>Register</span></a>&nbsp;
<a href="Wdb.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-question-sign"><br>Whydonateblood?</span></a>&nbsp;
<a href="Wnb.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-user"><br>Whoneedsblood?</span></a>&nbsp;
<a href="Tod.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-book"><br>Tipsondonating</span></a>&nbsp;
<a href="Mnb.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-tint"><br>Mostneededblood</span></a>&nbsp;
<a href="Raf.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-user"><br>Referafriend</span></a>&nbsp;
<a href="Contactus.php" style="color:99FFFF; text-decoration:none"><span class="glyphicon glyphicon-earphone"><br>Contactus</span></a>
</font>
</div>
<br>

<div id="logo">
<img src="Images/img82.jpg" align="left">
<h2 style="color:blue;">Donor Login</style></h2><br>
<input type="text" name="email" placeholder="Email Id">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="pswd" placeholder="Password">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="ok" onclick="location.href='Register.php'">&nbsp;&nbsp;
<input type="reset" value="Reset">
 </div>
<br>

<div id="intro">
</div>

</center>
</body>
</html>
