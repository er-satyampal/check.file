<?php
 
 $date = $_GET["date"];
 $topic = $_GET["topic"];
 $preview_link = $_GET["preview_link"];


require_once("db/connection.php");

$main = $connection-> prepare("INSERT INTO `officework`( datetime, topic_name, preview_link) VALUE ( :db_datetime, :db_topic_name, :db_preview_link)")  ;

$main->bindParam(':db_datetime', $date);
$main->bindParam(':db_topic_name', $topic);
$main->bindParam(':db_preview_link',$preview_link);


if($main->execute()){
    echo "Data Inserted Successfuly";	
    }else{
        echo "Something Went Wrong! ";
    }

// // INSERT INTO `officework` 
// (`topic_id`, `datetime`, `topic_name`, `preview_link`, `b`) 
// VALUES 
// ('1', '2022-12-18 11:59:36.000000', 'tp_name', 'pl', '0')