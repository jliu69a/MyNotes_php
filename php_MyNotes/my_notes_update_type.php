<?php
// http://www.mysohoplace.com/php_hdb/php_MyNotes/my_notes_update_type.php

include('connection_header.php');

if ($_POST) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $type = mysqli_real_escape_string($con, $_POST['type']);

    $insertSql = "UPDATE `my_notes_type` SET `name` = '$type' WHERE `id` = $id;";
    $result1 = mysqli_query($con, $insertSql);
    
    include('my_notes_query_types.php');
}

mysqli_close($con);
?>
