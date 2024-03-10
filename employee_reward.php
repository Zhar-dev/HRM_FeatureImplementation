<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Reward</title>
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
            display: inline-block;
            width: 46%;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }

        .card {
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
        }

        .action-cards ul {
            list-style: none;
            padding: 0;
        }

        .action-cards li {
            margin: 5px 0;
        }

        .news-feed ul {
            list-style: none;
            padding: 0;
        }

        .news-feed li {
            margin: 5px 0;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 2px;
            text-align: center;
        }

        .survey-form {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }

        .survey-form h2 {
            margin-bottom: 10px;
        }

        .survey-form p {
            margin-bottom: 15px;
        }

        .survey-form textarea {
            width: 40%;
            min-height: 40px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .survey-form button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: 1px solid #333;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .survey-form button:hover {
            background-color: #008631;
        }
        .button {
            width: 10rem;
        }
    </style>
</head>
<body>
    <header>
    <h2>Award an Employee</h2>
    </header>

    <main class="survey-form">
            <form action="employee_reward_script.php" method="POST">
                <section>
                    <label for="employee_id">Employee ID:</label><br>
                    <textarea type="number" id="employee_id" name="employee_id" required></textarea>
                </section>
                <section>
                    <label for="reward_name">Reward Name:</label><br>
                    <textarea type="text" id="reward_name" name="reward_name" required></textarea>
                </section>
                <section>
                    <label for="reward_date">Reward Date:</label><br>
                    <textarea type="date" id="reward_date" name="reward_date" required></textarea>
                </section>
                <section>
                    <label for="reward_type">Reward Type:</label><br>
                    <textarea type="text" id="reward_type" name="reward_type" required></textarea>
                </section>
                <section>
                    <label for="recognition_details">Recognition Details:</label><br>
                    <textarea id="recognition_details" name="recognition_details" required></textarea>
                </section>
                <section>
                    <label for="environmental_contribution">Environmental Contribution:</label>
                    <input type="checkbox" id="environmental_contribution" name="environmental_contribution">
                 </section>

            <button class="button" type="submit" name="submit">Add Reward</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2023 EcoAgility</p>
    </footer>

</body>
</html>
