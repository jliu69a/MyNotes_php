<?php

    //-- get latest data
    $sql1 = "SELECT `id`, `name` FROM `my_notes_type` WHERE 1 ORDER BY `name` ASC;";
    $resultArray1 = array();
    if ($result = mysqli_query($con, $sql1)) {
        $tempArray = array();
        
        while($row = $result->fetch_object()) {
            $tempArray = $row;
            array_push($resultArray1, $tempArray);
        }
    }
    
    $sql2 = "SELECT a.`id`, a.`title`, a.`type_id`, b.`name` AS 'type_name', a.`update_date`, a.`content` FROM `my_notes` a, `my_notes_type` b WHERE a.`type_id` = b.`id` ORDER BY a.`type_id` ASC, a.`update_date` ASC;";
    $resultArray2 = array();
    if ($result = mysqli_query($con, $sql2)) {
        $tempArray = array();
        
        while($row = $result->fetch_object()) {
            $tempArray = $row;
            array_push($resultArray2, $tempArray);
        }
    }

    header('Content-Type: application/json');
    $data = array(array('types' => $resultArray1), array('notes' => $resultArray2));
    echo json_encode($data);

?>
