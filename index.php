<?php
header('Content-Type:application/json');
$conn=new mysqli('localhost','root','','crud_operation');
$data=array();
if (!$conn) {
    die("Connection failed");

} else {

    $sql="SELECT * FROM test";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        while ($row=$result->fetch_assoc()) {
            $data[]=$row;
        }
    }   
}
$response=array(
    'status'=>'ok',
    'data'=>$data

);

// print_r($response);
echo(json_encode($response));
?>