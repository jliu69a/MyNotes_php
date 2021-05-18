<?php
// http://www.mysohoplace.com/php_hdb/php_MyNotes/my_notes_insert.php

include('connection_header.php');

if ($_POST) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $typeId = mysqli_real_escape_string($con, $_POST['typeid']);
    $dateTime = mysqli_real_escape_string($con, $_POST['datetime']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    
    $insertSql = "INSERT INTO `my_notes`(`title`, `type_id`, `update_date`, `date_time`, `content`) VALUES ('$title', $typeId, now(), '$dateTime', '$content');";
    $result1 = mysqli_query($con, $insertSql);
    
    include('my_notes_query.php');
}

mysqli_close($con);
?>
