<?php include("test_header.php"); ?>
<br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Employees</font>
<form action="pro3_s4insert.php">
<table width="600" align="center" border="0">
	<tr>
		<font face="Impact" size="5">พนักงาน</font>
		<td width="200" align="right"><p><label>รหัสพนักงาน :</label></p></td>
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
	<tr align="center">
		<td  width="200">
		</td>
		<td>&nbsp;</td>
		<td width="400">
			<br><p><button class="w3-btn w3-ripple w3-hover-green" type="submit">Save</button></p>
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
</table><br><br><br>
<!--<table align="center">
		<tr>
			<td>
<form action=pro_s4insert.php>
				รหัสสินค้า : <input name=id_productid value=>
				ชื่อสินค้า : <input name=productname value=>
				รหัสผู้จำหน่าย : <input name=supplierid value=>
				รหัสกลุ่มสินค้า : <input name=categoryid value=>
				ปรมาณต่อหน่วย : <input name=quantityperunit value=>
				<input type=submit value=Save>
</form>
			</td>
		</tr>
	</table><br><br><br><br><br><br><br>-->
	<?php include("footer.php"); ?>
<?php
if (!isset($_GET['id_employeeid']) || !isset($_GET['firstname'])) exit;
require("pro3_s1connect.php");
$sql="insert into $tb values('".$_GET['id_employeeid']."','".$_GET['firstname']."','".$_GET['lastname']."','".$_GET['title']."','".$_GET['birthdate']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
