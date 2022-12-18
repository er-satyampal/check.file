<?php
$id = $_GET["uid"];

require_once(__DIR__."/db/connection.php");

$sql_query = ("DELETE FROM `officework` WHERE id = '{$id}' ");

$connection->exec($sql_query);

echo "Your Record has Deleted Succesfully";

?>