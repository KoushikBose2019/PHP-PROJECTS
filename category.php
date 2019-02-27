<?php
require("lib/conn.php");
include "lib/admin_tpl/header.php";
include "lib/admin_tpl/nav.php";
//---------------------------------------

$sql = "select * from `category`";
$res = mysql_query($sql) or die();

print"<h1>Category</h1>";
print"<div><h3><a href='add_prod.php'>Add Category</h3></a></div>";

print"<table cellpadding='10px' border='1' width='80%' style='border-collapse:collapse'>
<tr><td>Sl</td><td>ID</td><td>Name</td><td>Option</td></tr>";
$sl = 0;
while($row=mysql_fetch_array($res))
{
	$sl++;	
	print"<tr>
		<td>$sl</td>
		<td>$row[id]</td>
		<td>$row[name]</td>
		<td><a href='edit.php?id=$row[id]'><img src='img/edit.jpg' height='30' width='30'></a>
		  <a href='del.php'><img src='img/del.jpg' height='30' width='30'></a>
		 </td>
	</tr>";
}
print"</table>";
//------------------------------------------
include "lib/admin_tpl/footer.php";

?>
