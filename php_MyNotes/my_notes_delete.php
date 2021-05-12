<?php
// http://www.mysohoplace.com/php_hdb/php_MyNotes/my_notes_delete.php

include('connection_header.php');

if ($_POST) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    
    $insertSql = "DELETE FROM `my_notes` WHERE `id` = $id;";
    $result1 = mysqli_query($con, $insertSql);
    
    include('my_notes_query.php');
}

mysqli_close($con);
?>
