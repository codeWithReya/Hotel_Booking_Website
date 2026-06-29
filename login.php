<?php
session_start();
include("connect.php");

header("Content-Type: application/json");

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(empty($email) || empty($password)){
    echo json_encode(["status"=>"empty"]);
    exit;
}

$sql = "SELECT name, email, dob, password FROM users WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){

        // ✅ session set
        $_SESSION['email'] = $user['email'];

        echo json_encode(["status"=>"success"]);
    } else {
        echo json_encode(["status"=>"wrong_password"]);
    }

} else {
    echo json_encode(["status"=>"no_user"]);
}
?>