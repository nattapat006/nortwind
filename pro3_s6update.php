<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Employees</font>
<form action="pro3_s6update.php">
<table width="600" align="center" border="0">
	<tr>
		<td width="200" align="righid_employeeidt"><p><label>รหัสพนักงาน :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="id_employeeid" style="width:50%" required>
		</td>
	</tr>
	<tr>
		<td width="200" align="right"><p><label>ชื่อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="firstname" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>นามสกุล :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="lastname" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>ตำแหน่ง :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="title" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>วันเกิด :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="birthdate" style="width:50%" required>
		</td>
	</tr>
	<tr align="right">
		<td  width="200">
		</td>
		<td>&nbsp;</td>
		<td width="400">
			<p><button class="w3-btn w3-ripple w3-hover-green" type="submit">Update</button></p>
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
</table><br><br><br><br><br>

<?php include("footer.php"); ?>
<?php
if (!isset($_GET['id_employeeid'])) { exit; }
require("pro_s1connect.php");
$sql.="update Employees set ";
$sql.="id_productid ='". $_GET['id_productid'] ."', ";
$sql.="firstname ='". $_GET['firstname'] ."', ";
$sql.="lastname ='". $_GET['lastname'] ."', ";
$sql.="title ='". $_GET['title'] ."', ";
$sql.="birthdate ='". $_GET['birthdate'] ."' ";
$sql.="where id_employeeid ='". $_GET['id_employeeid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro3_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro3_s0index.php'/>";
	mysql_close($connect);
}
?>
