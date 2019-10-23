<table align="center">
	<tr align="center">
		<td>
			<font face="Impact" size="5"><b>กลุ่มสินค้า</b></font><br><br>
		</td>
	</tr>
	<tr align="center">
		<td>
			<?php
				require("pro2_s1connect.php");
				$sql="select * from $tb";
				if((int)phpversion() >= 7) {
					$result = $connect->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "id_categoryid : ".$row["id_categoryid"]."- categoryname : ".$row["categoryname"]."- description : ". $row["description"]."- picture : ". $row["picture"]."<br/>";
						}
					} else {
						echo "no results";
					}
					$connect->close();
				} else {	
					if (!$result=mysql_db_query($db,$sql)) die("Query : failed");
					echo "Display all records : <br/>";
					while ($object = mysql_fetch_object($result)) {
						echo $object->eid . "  " . $object->ename . "<br/>";
					}
					echo "Total " . mysql_num_rows($result) ." records";
					mysql_close($connect);
				}
				//echo "<center><a href=pro_s0index.php>back</a>";
			?>
		</td>
	</tr>
</table>