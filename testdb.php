<?php
require('./db/connect-db.php');//เรียกใช้ไฟล์
$sql_office = "SELECT * FROM tbl_office WHERE office_name LIKE '%เชียง%'";
$query_office = mysqli_query($conn,$sql_office);
while($obj = mysqli_fetch_array($query_office))
{
	echo "ชื่อการไฟฟ้า ".$obj["office_name"]." รหัสการไฟฟ้า ".$obj["office"]."<br>";
}
?>