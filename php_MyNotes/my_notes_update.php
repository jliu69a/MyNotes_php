<?php
// http://www.mysohoplace.com/php_hdb/php_MyNotes/my_notes_update.php

include('connection_header.php');

if ($_POST) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $typeId = mysqli_real_escape_string($con, $_POST['typeid']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    
    $insertSql = "UPDATE `my_notes` SET `title` = '$title',`type_id` = $typeId, `update_date` = now(), `content` = '$content' WHERE `id` = $id;";
    $result1 = mysqli_query($con, $insertSql);
    
    include('my_notes_query.php');
}

mysqli_close($con);
?>
