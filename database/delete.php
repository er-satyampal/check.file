<?php
$id = $_GET["uid"];

try{
require_once(__DIR__."/db/connection.php");

$sql_query = ("DELETE FROM `officework` WHERE topic_id = {$id} ");


$connection->exec($sql_query);

echo "Your Record has Deleted Succesfully";

}catch(PDOException $ex_msg){
	echo "Error: ". $ex_msg->getMessage();
}
?>