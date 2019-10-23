<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Shippers</font>
<form action="pro_s6update.php">
<table width="600" align="center" border="0">
	<tr>
		<td width="200" align="right"><p><label>รหัสผู้ขนส่ง :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="shipperid" style="width:50%" required>
		</td>
	</tr>
	<tr>
		<td width="200" align="right"><p><label>ชื่อบริษัทผู้ขนส่ง :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="companyname" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>โทรศัพท์ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="phone" style="width:50%" required>
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
			<a href="pro_s0index.php"><p><button class="w3-btn w3-ripple w3-hover-red">Back</button></p></a>
		</td>
	</tr>
</table><br><br><br><br><br>

<?php include("footer.php"); ?>
<?php
if (!isset($_GET['shipperid'])) { exit; }
require("pro_s1connect.php");
$sql.="update Shippers set ";
$sql.="shipperid ='". $_GET['shipperid'] ."', ";
$sql.="companyname ='". $_GET['companyname'] ."', ";
$sql.="phone ='". $_GET['phone'] ."', ";
$sql.="where shipperid ='". $_GET['shipperid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro8_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro8_s0index.php'/>";
	mysql_close($connect);
}
?>
