<?php
$host = $_GET["host"];
$query = "SELECT * FROM dns WHERE host = '$host'";
mysqli_query($db, $query);
?>