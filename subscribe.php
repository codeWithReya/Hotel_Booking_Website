<?php
include("connect.php");
header("Content-Type: application/json");

$email = $_POST['email'] ?? '';
$subscription = $_POST['subscription'] ?? '';

$email = trim($email);
$subscription = trim($subscription);

if ($email == '' || $subscription == '') {
    echo json_encode([
        "status" => "empty"
    ]);
    exit();
}

/* STEP 1: Check email in users table */
$stmt = $conn->prepare("SELECT name FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo json_encode([
        "status" => "not_registered",
        "message" => "You are not registered. Please register first."
    ]);
    exit();
}

$user = $result->fetch_assoc();
$fullName = $user['name'];

/* STEP 2: Check already subscribed */
$stmt2 = $conn->prepare("SELECT id FROM user_subscription WHERE email=?");
$stmt2->bind_param("s", $email);
$stmt2->execute();
$result2 = $stmt2->get_result();

if ($result2->num_rows > 0) {
    echo json_encode([
        "status" => "exists",
        "message" => "You have already subscribed to City Skyline."
    ]);
    exit();
}

/* STEP 3: Insert subscription */
$stmt3 = $conn->prepare("INSERT INTO user_subscription(fullName,email,subscription,created_at) VALUES(?,?,?,NOW())");
$stmt3->bind_param("sss", $fullName, $email, $subscription);

if ($stmt3->execute()) {
    echo json_encode([
        "status" => "success"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Database insert failed"
    ]);
}
?>