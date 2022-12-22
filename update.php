<?php
 
 $datetime = $_GET["date"];
 $topic_name = $_GET["topic"];
 $preview_link = $_GET["preview_link"];


require_once("db/connection.php");

$main = $connection->prepare("INSERT INTO `officework`( datetime, topic_name, preview_link) VALUE ( :db_datetime, :db_topic_name, :db_preview_link)");

$main->bindParam(':db_datetime', $datetime);
$main->bindParam(':db_topic_name', $topic_name);
$main->bindParam(':db_preview_link',$preview_link);

if($main->execute()){
    echo "Data Inserted Successfuly";	
    }else{
        echo "Something Went Wrong! ";
    }