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

?>

<!-- HTML Started From Here  -->

<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <button>
            <a href="http://localhost/check.file/database/index-1.html">Add Again</a>
        </button>
<br/>
        <button>
            <a href="http://localhost//check.file/database/viewdata_base_table.php">Go to All data List</a>
        </button>
    </body>
</html>
<!-- HTML Ending at Here  -->