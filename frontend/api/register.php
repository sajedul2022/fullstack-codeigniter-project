<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include("db_connect.php");

$data = file_get_contents("php://input");
// echo $data;

$data = json_decode($data);

if(($data->fname) && ($data->fname != '')){
    
    $fname = $data->fname;
    $lname = $data->lname;
    $email = $data->email;
    $password = $data->password;

    $result = mysqli_query($db_conn, "SELECT * FROM registration WHERE email = '$email'");

        

        if(mysqli_num_rows($result)>0){
            echo json_encode(["duplicate"=>"Try Your Different Email Address"]);
        }else{
            $resultInsert = mysqli_query($db_conn, "INSERT INTO registration (fname, lname, email, password) VALUES ('$fname','$lname','$email','$password')");

            echo json_encode(["success"=>"Registration Complete."]);
        }

}else{
    echo json_encode(["empty"=>"All Field must be filled"]);
}
