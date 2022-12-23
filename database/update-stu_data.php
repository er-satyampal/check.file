<?php

if(!ISSET($_REQUEST["uid"])){
  echo "Student ID is not Present";
  exit();
}else if (empty($_REQUEST["uid"])){
  echo "Student ID is empty";
  exit();
}else{
  require_once(__DIR__."/db/connection.php");
 
  $main = $connection->prepare("SELECT * FROM `officework` WHERE `topic_id` = '{$_REQUEST["uid"]}' LIMIT 1");
  $main->setFetchMode(PDO:: FETCH_OBJ);
  $main->execute();
  $main_data = $main->fetch();
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form</title>
    <style>
.main-div{
border:1px solid black;
height: 400px;
width: 400px ;
margin-top: 90px;
margin-left:300px;
text-align: center;
}
    </style>
</head>
<body>

  <div class="main-div">
        <h2>Inter Your Daily Data</h2>
        <form action="update.php" method="GET">
            &nbsp;<br/>
            &nbsp;<br/>
    <label for="Date"> Worke-Date </label>
             <input  type="date" placeholder="Inter Date " name="date" value="<?= $main_data->datetime ?>"><br/>
             &nbsp;<br/>
             &nbsp;<br/>
             &nbsp;<br/>
             &nbsp;<br/>
   <label for="Topic Name">Topic Name</label>
             <input type="text" placeholder="Enter The Topic Name" name="topic" value="<?= $main_data->topic_name ?>">
             &nbsp;<br/>
             &nbsp;<br/>
             &nbsp;<br/>

             <label for="Preview link">Preview_link</label>
             <input type="text" placeholder="Preview_link" name="preview_link" value="<?= $main_data->preview_link ?>">

             &nbsp;<br/>
             &nbsp;<br/>
             <input type="submit" value="Submit">

        </form>
    </pre>
  </div>
</body>
</html>