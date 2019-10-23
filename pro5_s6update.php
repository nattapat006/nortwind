<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Customers</font>
<form action="pro4_s6update.php">
<table width="600" align="center" border="0">
	<tr>
		<td width="200" align="right"><p><label>รหัสผู้จำหน่าย :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="supplierid" style="width:50%" required>
		</td>
	</tr>
	<tr>
		<td width="200" align="right"><p><label>ชื่อบริษัทผู้จำหน่าย :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="companyname" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>ชื่อผู้ติดต่อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="contactname" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>ตำแหน่งผู้ติดต่อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="contacttitle" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>ที่อยู่ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="address" style="width:50%" required>
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
			<a href="pro4_s0index.php"><p><button class="w3-btn w3-ripple w3-hover-red">Back</button></p></a>
		</td>
	</tr>
</table><br><br><br><br><br>

<?php include("footer.php"); ?>
<?php
if (!isset($_GET['supplierid'])) { exit; }
require("pro_s1connect.php");
$sql.="update Suppliers set ";
$sql.="supplierid ='". $_GET['supplierid'] ."', ";
$sql.="companyname ='". $_GET['companyname'] ."', ";
$sql.="contactname ='". $_GET['contactname'] ."', ";
$sql.="contacttitle ='". $_GET['contacttitle'] ."', ";
$sql.="address ='". $_GET['address'] ."' ";
$sql.="where supplierid ='". $_GET['supplierid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro4_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro4_s0index.php'/>";
	mysql_close($connect);
}
?>
