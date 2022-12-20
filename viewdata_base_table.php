<?php include_once(__DIR__."/db/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th, tr {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}
</style>
</head>
<body>
    <h2>DataBase-Table</h2>
    <table>
        <tr>
            <th>Topic Id</th>
            <th>Date</th>
            <th>Topic Name</th>
            <th>Preview link</th>
            <th>Changes</th>
        </tr>
<?php
$main = $connection->prepare("SELECT * FROM `officework`");
$main->setFetchMode(PDO:: FETCH_OBJ);

$main->execute();

while($row=$main->fetch()){

    $del = 'http://localhost/check.file/delete.php?uid='.$row->topic_id;
    $edit = 'http://localhost/check.file/update-stu_data.php?='.$row->topic_id;


    echo '
  <tr>
    <td>'.$row->topic_id.'</td>
    <td>'.$row->datetime. '</td>
    <td>'.$row->topic_name.'</td>
    <td><a href="'.$row->preview_link.'">Open</a></td>
    <td>
        <a href="'.$del.'" target="_blank">Delete</a>
        /
        <a href="'.$edit.'" target="_blank">Edit</a>
  </tr>
  ';}
  ?>
    </table>
</body>
</html>
<!-- 
$del = 'http://localhost/check.file/delete.php?uid='.$row->topic_id;
    echo'
    <td>'.$row->topic_id.'</td>
    <td>'.$row->datetime.'</td>
    <td>'.$row->topic_name.'</td>
    <td>'.$row->preview_link.'</td>
    <td>
    <a href="'.$del.'"  target="_blank">Delete</a>
    </tr>
    ';} -->