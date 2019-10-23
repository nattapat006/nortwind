<?php include("test_header.php"); ?>
<br><br><br><br><br><br><br>
<table align="center" width="1024" border="0" bgcolor="#F5F5F5">
	<tr>
		<td>
<div class="w3-container">
	<font face="Impact" size="16">Orderdetails</font>
<form action="pro7_s6update.php">
<table width="600" align="center" border="0">
	<tr>
		<td width="200" align="right"><p><label>รหัสใบสั่งซื้อ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="orderid" style="width:50%" required>
		</td>
	</tr>
	<tr>
		<td width="200" align="right"><p><label>รหัสสินค้า :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="productid" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>ราคาต่อหน่าย :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="unitprice" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>ปริมาณ :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="quantity" style="width:50%" required>
		</td>
	</tr><tr>
		<td width="200" align="right"><p><label>ส่วนลด :</label></p></td>
		<td>&nbsp;</td><td width="400">
		<input class="w3-input" type="text" name="discount" style="width:50%" required>
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
			<a href="pro7_s0index.php"><p><button class="w3-btn w3-ripple w3-hover-red">Back</button></p></a>
		</td>
	</tr>
</table><br><br><br><br><br>

<?php include("footer.php"); ?>
<?php
if (!isset($_GET['orderid'])) { exit; }
require("pro_s1connect.php");
$sql.="update Orderdetails set ";
$sql.="orderid ='". $_GET['orderid'] ."', ";
$sql.="productid ='". $_GET['productid'] ."', ";
$sql.="unitprice ='". $_GET['unitprice'] ."', ";
$sql.="quantity ='". $_GET['quantity'] ."', ";
$sql.="discount ='". $_GET['discount'] ."' ";
$sql.="where orderid ='". $_GET['orderid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro7_s0index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : True";
	else 
		echo "<meta http-equiv='refresh' content='0; url=pro7_s0index.php'/>";
	mysql_close($connect);
}
?>
