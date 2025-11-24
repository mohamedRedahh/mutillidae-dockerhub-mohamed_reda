<?php
$host = $_GET["host"];
$stmt = $db->prepare("SELECT * FROM dns WHERE host = ?");
$stmt->bind_param("s", $host);
$stmt->execute();
?>