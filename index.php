<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ads_hrmdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to calculate overall organizational agility score
$sql = "
SELECT
    esr.total_responses,
    esr.avg_job_satisfaction_percentage,
    esr.avg_work_life_balance_percentage,
    esr.avg_sense_of_purpose_percentage,
    err.org_agility_percentage
FROM (
    SELECT
        COUNT(*) AS total_responses,
        ROUND((AVG(job_satisfaction_score) / 100) * 100) AS avg_job_satisfaction_percentage,
        ROUND((AVG(work_life_balance_score) / 100) * 100) AS avg_work_life_balance_percentage,
        ROUND((AVG(sense_of_purpose_score) / 100) * 100) AS avg_sense_of_purpose_percentage
    FROM
        employee_survey_responses
) esr
JOIN (
    SELECT
        (SUM(environmental_contribution) / COUNT(environmental_contribution)) * 100 AS org_agility_percentage
    FROM
        employee_rewards_recognition
) err ON 1=1";

$result = $conn->query($sql);

if ($result === false) {
    die("Error in SQL query: " . $conn->error);
}

$result1 = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoAgility - Homepage</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Poppins, sans-serif;
        }

        header {
            background-color: #008631;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }
        .percentage-title {
            width: 20%;
        }
        .card {
            display: flex;
            justify-content: center;
            column-gap: 2rem;
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .button {
            height: 1.6rem;
            display: inline-block;
            padding: 10px 20px;
            background-color: #008631;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #005723;
        }

        footer {
            margin-top: 12rem;
            background-color: #333;
            color: white;
            padding: 2px;
            text-align: center;
        }
        .percentage {
            background-color: #78A083;

            width: 14rem;
            height: 4rem;

            text-align:center;

            border-radius: 6px;

            font-size: 16px;
            font-weight: bold;
        }

        .percentage span {
            font-size: 0.8em;
            vertical-align: super;
            margin-left: 2px;
        }
        a {
            margin-left: 1rem;
        }
        .action-cards {
            display: flex;
            justify-content: center;
        }
        h3 {
            margin-top: 3.7rem;
            justify-content: center;
            text-align: center;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h2>EcoAgility Tracker</h2>
        <p>Your one-stop platform for greening your HR practices and boosting organizational agility.</p>
    </header>
    <main>
        <section class="overview-dashboard">
            <div class="card">
                <h2 class="percentage-title">EcoAgility Statistics</h2>
                <p class="percentage">Eco Participation: <br> <?php echo number_format($result1['org_agility_percentage'], 1); ?><span>&#37;</span></p>
                <p class="percentage">Job Satisfaction: <br> <?php echo number_format($result1['avg_job_satisfaction_percentage'], 1); ?><span>&#37;</span></p>
                <p class="percentage">Work Life Balance: <br> <?php echo number_format($result1['avg_work_life_balance_percentage'], 1); ?><span>&#37;</span></p>
                <p class="percentage">Sense of Purpose: <br> <?php echo number_format($result1['avg_sense_of_purpose_percentage'], 1); ?><span>&#37;</span></p>
            </div>

            <h3>Quick Actions</h3> <br>
        <section class="action-cards">
            <a href="form.php" class="button">Employee Survey</a> 
            <a href="survey_feedback.php" class="button">Eco Support</a>
            <a href="employee_reward.php" class="button">Award an Employee</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 EcoAgility</p>
    </footer>
</body>
</html>
