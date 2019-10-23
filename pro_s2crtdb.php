<?php include("test_header.php"); ?>
<br><br><br><br><br>
<?php
if(file_exists("pro_s1connect.php"))
  require("pro_s1connect.php");
else
  die("File not found");
if ($dbstatus == 0) dbWork("create database $db");
qWork("create table $tb (id_productid int(11),productname varchar(40),supplierid char(40),categoryid char(40),quantityperunit char(40))");
//qWork("insert into $tb values('1001','Tom')");
//qWork("insert into $tb values('1002','Dang')");
//qWork("insert into $tb values('1003','Pom')");
if((int)phpversion() >= 7) $connect->close(); else mysql_close($connect);
echo '<a href="pro_s0index.php">back</a>';
function dbWork($sql) {
	global $db,$host,$uname,$upass,$connect;	
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else {
			echo "$sql : succeeded<br/>";
			$connect = new mysqli($host, $uname, $upass, $db);
		}
	} else { 
		if (!$result=mysql_query($sql,$connect))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}	
function qWork($sql) {
	global $connect,$db;
	if((int)phpversion() >= 7) {
		if ($connect->query($sql) === FALSE) 
			echo "$sql : failed ". $conn->error . "<br/>";
		else 
			echo "$sql : succeeded<br/>";
	} else {   
		if (!$result=mysql_db_query($db,$sql))
			echo "$sql : failed<br/>"; 
		else 
			echo "$sql : succeeded<br/>";  
	}
}
?>
<?php include("footer.php"); ?>