<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ads_hrmdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST["submit"])) {
    $employee_id = $_POST['employee_id'];
    $work_practices_feedback = $_POST['work_practices_feedback'];
    $eco_friendly_initiatives_feedback = $_POST['eco_friendly_initiatives_feedback'];
    $job_satisfaction_score = $_POST['job_satisfaction_score'];
    $work_life_balance_score = $_POST['work_life_balance_score'];
    $sense_of_purpose_score = $_POST['sense_of_purpose_score'];

    $sql = "INSERT INTO employee_survey_responses (employee_id, survey_date, work_practices_feedback, eco_friendly_initiatives_feedback, job_satisfaction_score, work_life_balance_score, sense_of_purpose_score) VALUES ('$employee_id', NOW(), '$work_practices_feedback', '$eco_friendly_initiatives_feedback', '$job_satisfaction_score', '$work_life_balance_score', '$sense_of_purpose_score')";
    
    $user_q = mysqli_query($conn, $sql);

    if ($user_q) {
        echo "Survey submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
