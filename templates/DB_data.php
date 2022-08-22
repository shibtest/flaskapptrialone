<?php
include("DB_Conn.php");
$sql = mysqli_query($db,"SELECT voltage FROM bokaro_temp WHERE meter_id = 1");
//$record_count=mysqli_num_rows($sql);
echo $sql;
?>