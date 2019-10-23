<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Employees</font>
<form action="pro3_s5delete.php">
<table width="600" align="center" border="0">
	<tr>
		<font face="Impact" size="5">ต้องการลบ id</font>
		<td width="200" align="right"><p><label>รหัสสินค้า :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="delid" style="width:50%" required>
		</td>
	</tr>
	<tr align="center">
		<td  width="200">
		</td>
		<td>&nbsp;</td>
		<td width="400">
			<br><p><button class="w3-btn w3-ripple w3-hover-green" type="submit">Delete</button></p>
		</td>
	</tr>
</table>
			
		</div>
</form>
		</td>
	</tr>
	<tr align="center">
		<td>
			<a href="pro3_s0index.php"><p><button class="w3-btn w3-ripple w3-hover-red">Back</button></p></a>
		</td>
	</tr>
</table><br><br><br><br><br><br>
<?php include("footer.php"); ?>
<table align="center" width="100%">
	<tr align="center">
		<td>
			<?php
$myForm = '<body>

<form action="pro3_s5delete.php">
</form>';

if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("pro3_s1connect.php");
$sql="delete from $tb ";
$sql.="where id_employeeid ='".$_GET['delid']."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		header("location: pro3_s0index.php");	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		header("location: pro3_s0index.php");
	mysql_close($connect);
}
?>
		</td>
	</tr>
</table>

