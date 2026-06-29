<?php
session_start();
include("connect.php");

header("Content-Type: application/json");

// ❌ if not logged in
if(!isset($_SESSION['email'])){
    echo json_encode(["status"=>"not_logged_in"]);
    exit;
}

$email = $_SESSION['email'];

// ✅ fetch user data
$stmt = $conn->prepare("SELECT name, email, dob FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if($user = $result->fetch_assoc()){

    echo json_encode([
        "status" => "success",
        "name" => $user['name'],
        "email" => $user['email'],
        "dob" => $user['dob']
    ]);

} else {
    echo json_encode(["status"=>"no_user"]);
}
?>