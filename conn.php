<?php
$conn = mysql_connect("localhost", "root", "");
if(!$conn)
{
	die("connection error");
}

$db = mysql_select_db("mobile_demo");
if(!$db)
{
	die("db connection error");
}

?>