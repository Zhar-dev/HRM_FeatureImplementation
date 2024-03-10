<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoAgility - Employee Survey</title>
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
    </style>
</head>
<body>
    <header>
        <h1>EcoAgility - Employee Survey</h1>
    </header>
    <main>
        <form class="survey-form" action="form_script.php" method="POST">
        <section>
            <h2>Employee Eco Feedback</h2>
            <label for="employee_id">Employee ID:</label><br>
            <textarea type="number" id="employee_id" name="employee_id" required></textarea>
            <br>

            <p>Please share your feedback on how our work practices can be more environmentally friendly.</p>
            <br>
            <label for="work_practices_feedback">Work Practices Feedback:</label><br>
            <textarea name="work_practices_feedback" id="work_practices_feedback" required></textarea>
        </section>

        <section>
            <p>Please share your feedback on our current eco-friendly initiatives and suggest any new ones you would like to see implemented.</p>
            <br>
            <label for="eco_friendly_initiatives_feedback">Eco-Friendly Initiatives Feedback:</label><br>
            <textarea name="eco_friendly_initiatives_feedback" id="eco_friendly_initiatives_feedback" required></textarea>
        </section>

        <hr>

        <section>
            <h2>Employee Survey Feedback</h2>
            <label for="job_satisfaction_score">Job Satisfaction Score (1-100):</label><br>
            <textarea type="number" id="job_satisfaction_score" name="job_satisfaction_score" min="0" max="100" required></textarea>
        </section>

        <section>
            <label for="work_life_balance_score">Work Life Balance Score (1-100):</label><br>
            <textarea type="number" id="work_life_balance_score" name="work_life_balance_score" min="0" max="100" required></textarea>
        </section>

        <section>
            <label for="sense_of_purpose_score">Sense of Purpose Score (1-100):</label><br>
            <textarea type="number" id="sense_of_purpose_score" name="sense_of_purpose_score" min="0" max="100" required></textarea>
        </section>

        <section>
            <button type="submit" name="submit">Submit Survey</button>
        </section>
        </form>

    </main>
    <footer>
        <p>&copy; 2023 EcoAgility</p>
    </footer>
</body>
</html>
