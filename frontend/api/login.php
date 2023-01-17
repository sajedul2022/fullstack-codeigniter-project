<?php
include('db_connect.php');

$data =  file_get_contents("php://input");
$data = json_decode($data);

// print_r($data);

$email = $data->email;
$password = $data->password;

if(isset($email) && ($email != '')){

    // echo json_encode($email);

    $result = mysqli_query($db_conn, "SELECT * FROM registration WHERE email = '$email' AND password = '$password'");

    $row = mysqli_fetch_assoc($result);


    if(mysqli_num_rows($result)>0){
        echo json_encode(["success"=>"Successfully Login!", "user"=> $row]);
    }else{
        echo json_encode(["error"=>"User Doesn't Exist!"]);
    }
}













// $data = file_get_contents("php://input");

// $data =  json_decode($data);

// $email = $data->email;
// $password = $data->password;

// $result = mysqli_query($db_conn, "SELECT * FROM registration WHERE email='$email' AND password='$password'");

// if (mysqli_num_rows($result) > 0) {
//     //echo "Yes";
//     http_response_code(200);
//     $row = mysqli_fetch_assoc($result);
//     $row["status"] = 200;
//     echo json_encode($row);
// } else {
//     $row["status"] = 202;
//     echo json_encode($row);
// }
