<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Orders</font>
<form action="pro6_s6update.php">
<table width="600" align="center" border="0">
	<tr>
		<td width="200" align="right"><p><label>รหัสใบสั่งซื้อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="orderid" style="width:50%" required>
		</td>
	</tr>
	<tr>
		<td width="200" align="right"><p><label>รหัสลูกค้า :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="productname" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>รหัสพนักงาน :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="supplierid" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>วันที่สั่งซื้อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="categoryid" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>วันที่ต้องการ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="quantityperunit" style="width:50%" required>
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
			<a href="pro6_s0index.php"><p><button class="w3-btn w3-ripple w3-hover-red">Back</button></p></a>
		</td>
	</tr>
</table><br><br><br><br><br>

<?php include("footer.php"); ?>
<?php
if (!isset($_GET['orderid'])) { exit; }
require("pro6_s1connect.php");
$sql.="update Orders set ";
$sql.="orderid ='". $_GET['orderid'] ."', ";
$sql.="productname ='". $_GET['productname'] ."', ";
$sql.="supplierid ='". $_GET['supplierid'] ."', ";
$sql.="categoryid ='". $_GET['categoryid'] ."', ";
$sql.="quantityperunit ='". $_GET['quantityperunit'] ."' ";
$sql.="where orderid ='". $_GET['orderid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro6_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro6_s0index.php'/>";
	mysql_close($connect);
}
?>
