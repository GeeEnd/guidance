<?php  

include "db_conn.php";

$sql = "SELECT * FROM referalReasons";
$result = mysqli_query($conn, $sql);