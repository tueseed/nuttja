<?php
require('./db/connect-db.php');//เรียกใช้ไฟล์
$sql_office = "SELECT * FROM tbl_office";
$query_office = mysqli_query($conn,$sql_office);
while($obj = mysqli_fetch_array($query_office))
{
	echo "การไฟฟ้า ".$obj["office_name"]." WBS ".$obj["office"]."<br>";
}
?>