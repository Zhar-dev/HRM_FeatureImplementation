<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ads_hrmdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $employee_id = $_POST["employee_id"];
    $reward_name = $_POST["reward_name"];
    $reward_date = $_POST["reward_date"];
    $reward_type = $_POST["reward_type"];
    $recognition_details = $_POST["recognition_details"];
    $environmental_contribution = isset($_POST["environmental_contribution"]) ? 1 : 0;

    $sql = "INSERT INTO employee_rewards_recognition (employee_id, reward_name, reward_date, reward_type, recognition_details, environmental_contribution)
            VALUES ('$employee_id', '$reward_name', '$reward_date', '$reward_type', '$recognition_details', '$environmental_contribution')";

    $result = $conn->query($sql);

    if ($result) {
        echo "Reward added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
