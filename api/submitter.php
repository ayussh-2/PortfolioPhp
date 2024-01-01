<?php 

include "conn.php";
if(isset($_POST['submitForm'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $purpose = $_POST['purpose'];
    $details = $_POST['details'];
    
    $fullDetails['name'] = $name;
    $fullDetails['email'] = $email;
    $fullDetails['phone'] = $phone;
    $fullDetails['purpose'] = $purpose;
    $fullDetails['details'] = $details;

    $details = json_encode($fullDetails);

    $query = mysqli_query($conn,"INSERT INTO `portfoliodb` (`email`,`details`,`status`) VALUES ('$email','$details',1);");

    if($query){
        $response = array("status" => "success", "message" => "Data received and processed successfully");
            echo json_encode($response);
    }else{
        $response = array("status" => "error", "message" => "Query not executed!");
            echo json_encode($response);
    }
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    session_start();
    if($email=="1@1" && $pass == "ayush"){
    $_SESSION['email'] = $email;
        $response = array("status" => "success", "message" => "Login Successful");
            echo json_encode($response);
    }else{
        $response = array("status" => "error", "message" => "Invalid Credentials!");
            echo json_encode($response);
    }
}

if(isset($_POST['getData'])){
    $query = mysqli_query($conn,"SELECT * FROM `portfoliodb` WHERE `status` = 1 ;");
    $arr = [];
    if(mysqli_num_rows($query)<=0){
        $response = array("status"=>"noData");
        echo json_encode($response);
    }else{
        while($row = mysqli_fetch_assoc($query)){
            $jsonData = $row['details'];
            array_push($arr,$jsonData);
        }
        $response = $arr;
        echo json_encode($response);
    }

}

if(isset($_POST['ignoreRequest'])){
    $email = $_POST['email'];
    $query = mysqli_query($conn,"UPDATE `portfoliodb` SET `status` = 0 WHERE `email` = '$email';");
    if($query){
        $response = array("status"=>"success");
        echo json_encode($response);
    }else{
        $response = array("status"=>"error");
        echo json_encode($response);
    }
}
?>