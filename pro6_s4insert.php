<?php include("test_header.php"); ?>
<br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Orders</font>
<form action="pro6_s4insert.php">
<table width="600" align="center" border="0">
	<tr>
		<font face="Impact" size="5">สมัครสมาชิก</font>
		<td width="200" align="right"><p><label>รหัสใบสั่งซื้อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="orderid" style="width:50%" required>
		</td>
	</tr>
	<tr>
		<td width="200" align="right"><p><label>รหัสลูกค้า :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="customerid" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>รหัสพนักงาน :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="employeeid" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>วันที่สั่งซื้อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="orderdate" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>วันที่ต้องการ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="requireddate" style="width:50%" required>
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
			<a href="pro6_s0index.php"><p><button class="w3-btn w3-ripple w3-hover-red">Back</button></p></a>
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
if (!isset($_GET['orderid']) || !isset($_GET['customerid'])) exit;
require("pro6_s1connect.php");
$sql="insert into $tb values('".$_GET['orderid']."','".$_GET['customerid']."','".$_GET['employeeid']."','".$_GET['orderdate']."','".$_GET['requireddate']."')";
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
