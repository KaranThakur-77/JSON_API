<?php
header('Content-Type:application/json');
$success=false;
$conn=new mysqli('localhost','root','','crud_operation');
$data=array();
if (!$conn) {
    die("Connection failed");

} else {

    $sql="INSERT INTO test (id,name,age,contact) VALUES(null,'Prakriti','20','98989898')";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        $success=true;
        }
    }   
$response=array(
    'status'=>'ok',
    'success'=>$success
    

);

// print_r($response);
echo(json_encode($response));
?>