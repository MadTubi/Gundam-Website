<?php
    //Based on the variable $data, it checks what title matches that in the database and then selects
    //all the information on the same row and sends it back to the ajax function

    require_once ('DBGundam.php');

   $data = $_POST['text'];
    
    $Gundam = "Select * from Gundam_V2 where Title = ?";
    $res = $conn->prepare($Gundam);
    $res->execute([$data]);
    $row = $res->fetch(PDO::FETCH_ASSOC);

    echo json_encode($row);


?> 

