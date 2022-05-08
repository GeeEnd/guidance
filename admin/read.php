<?php  

include "db_conn.php";

$sql = "SELECT * FROM reserveList";
$result = mysqli_query($conn, $sql);