<?php
// http://www.mysohoplace.com/php_hdb/php_MyNotes/my_notes_delete_type.php

include('connection_header.php');

if ($_POST) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    
    $insertSql = "DELETE FROM `my_notes_type` WHERE `id` = $id;";
    $result1 = mysqli_query($con, $insertSql);
    
    include('my_notes_query_types.php');
}

mysqli_close($con);
?>
