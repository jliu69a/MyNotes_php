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
    
    header('Content-Type: application/json');
    echo json_encode($resultArray1);
?>
