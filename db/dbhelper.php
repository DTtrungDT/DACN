<?php
require_once('config.php');
function execute($sql){
    //open connection
    $conn = mysqli_connect(HOST, DATABASE, USERNAME ,PASSWORD);
    $sql = "SET NAMES 'utf8'";
    mysqli_query($conn, $sql);

    // query
    mysqli_query($conn,$sql);

    //close connection
    mysqli_close($conn);
}

function execute_Result($sql,$isSingle=false){
    $data = null;
    //open connection
    $conn = mysqli_connect(HOST, DATABASE, USERNAME ,PASSWORD);
    $sql = "SET NAMES 'utf8'";
    mysqli_query($conn, $sql);

    // query
   
    $resultset = mysqli_query($conn,$sql);
    if($isSingle){
        $data=mysqli_fetch_array($resultset,1);
    } else{
        $data = [];
        while(($row = mysqli_fetch_array($resultset,1)) != null){
        $data[] = $row;

    }}

    //close connection
    mysqli_close($conn);
    return $data;
}
?>