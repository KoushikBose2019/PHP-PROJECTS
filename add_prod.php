<?php
include"lib/conn.php";
include "lib/admin_tpl/header.php";
include "lib/admin_tpl/nav.php";
//---------------------------------------
$sql = "select * from `category`";
$res = mysql_query($sql) or die();

?>
<br />
<br />
<br />

<form action="adding_prod.php" method="post">

Select Category: <select name="cat_id">
<?php
while($row=mysql_fetch_array($res))
{

	print"<option value='$row[id]'>".strtoupper($row['name'])."</option>";
}
?>
</select>
<br />
Name: <input type="text" name="pnm" /><br /><br />

price: <input type="text" name="price" /><br />
<input type="submit" value="Submit" /> 
</form>


<?php
//------------------------------------------
include "lib/admin_tpl/footer.php";

?>
