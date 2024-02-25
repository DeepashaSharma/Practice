<?php
$link=mysql_connect("localhost","root","root") or die("cannot connect to database");
mysql_select_db("one",$link)or die("cannot select db");
?>