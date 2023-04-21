<?php
header("Content-Type:application/json");
$success=false;
$conn=new mysqli('localhost','root','','crud_operation');
if (!$conn) {
    die("Connection failed");
    # code...
} else {
    # code...
    $sql="UPDATE  test SET name='Deepak Mehta',age=19,contact='9876543210' WHERE id=9";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        $success=true;
        # code...
    }
}
$response=array(
    'status'=>'ok',
    'success'=>$success
);
echo(json_encode($response));
$conn->close();
?>