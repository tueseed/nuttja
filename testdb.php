<?php
require('./db/connect-db.php');//เรียกใช้ไฟล์
$sql_office = "SELECT * FROM tdd01.3_report";
$query_office = mysqli_query($conn,$sql_office);
while($obj = mysqli_fetch_array($query_office))
{
	echo "การไฟฟ้า ".$obj["area"]." WBS ".$obj["wbs"]."<br>";
}
?>