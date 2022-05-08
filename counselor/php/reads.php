<?php  

include "db_conn.php";

$sql = "SELECT * FROM appointment";
$result = mysqli_query($conn, $sql);