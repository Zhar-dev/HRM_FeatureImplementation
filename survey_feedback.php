<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ads_hrmdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT work_practices_feedback, eco_friendly_initiatives_feedback FROM employee_survey_responses";

$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            background-color: #008631;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #008631;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

    <h2>Employee Feedback</h2>

    <?php
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th>Work Practices Feedback</th>';
        echo '<th>Eco-Friendly Initiatives Feedback</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['work_practices_feedback'] . '</td>';
            echo '<td>' . $row['eco_friendly_initiatives_feedback'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No feedback available.';
    }
    ?>

</body>

</html>

<?php
$conn->close();
?>
