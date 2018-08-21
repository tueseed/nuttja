<?php
/*function push_msg()
{   
}*/
require('./db/connect-db.php');
$sql = "SELECT * FROM tbl_office";
$query = mysqli_query($conn,$sql);
while($obj = mysqli_fetch_array($query))
{
    echo $obj["office_name"]."<br>";

}
//echo "OK...";

?>