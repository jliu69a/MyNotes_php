<?php
// http://www.mysohoplace.com/php_hdb/php_MyNotes/my_notes_insert_type.php

include('connection_header.php');

if ($_POST) {
    $type = mysqli_real_escape_string($con, $_POST['type']);

    $insertSql = "INSERT INTO `my_notes_type` (`name`) VALUES ('$type');";
    $result1 = mysqli_query($con, $insertSql);
    
    include('my_notes_query_types.php');
}

mysqli_close($con);
?>
