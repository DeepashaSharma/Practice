<?php

 if(isset($_POST['submit']))
 {
	 $n=$_POST['name'];
	 $m=$_POST['message'];
	 
	 
	 $to = "chitrangsharma1999@gmail.com";
     $subject = "Email from my project on blood bank";
	 $header = "deepashasharma27@gmail.com";
	 
	 $body = "this is an email from $n \n\n $m";
	 
	 if(mail($to , $subject , $body , $header))
	 {
		 echo "send";
	 }
	 else
	 {
		 echo "fail";
	 }
	// echo $n;
	// echo $m;
 }
?>
<html>
<body>
    <form action="" method="POST">
	Name:<input type="text" name="name">
	Message:<textarea name="message"></textarea>
	     <input type="submit" name="submit">
	  </form>
</body>
</html>