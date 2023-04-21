<?php
header('Content-Type:application/json');
$success=false;
$conn=new mysqli('localhost','root','','crud_operation');

if (!$conn) {
    die("Connection failed");
    
    # code...
} else {
    # code...
    $sql="DELETE FROM test WHERE id=8";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        $success=true;
    }
  
}

$response=array(
    'status'=>'ok',
    'success'=>$success
);
echo(json_encode($response));
?>