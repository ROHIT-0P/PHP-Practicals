<html>
<head>
    <title>Basic Salary to Net Salary Converterr</title>
</head>
<body>
    <h2>Basic Salary to Net Salary Converter</h2>
    <form method="post">
        <label for="basicSalary">Enter Basic Salary:</label>
        <input type="number" id="basicSalary" name="basicSalary" required><br><br>
        <button type="submit" name="calculate">Calculate Net Payment</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        // Get basic salary input from the user
        $basicSalary = $_POST['basicSalary'];

        // Calculate DA, HRA, and Medical
        $da = 0.5 * $basicSalary;
        $hra = 0.1 * $basicSalary;
        $medical = 0.04 * $basicSalary;

        // Calculate Gross Salary
        $grossSalary = $basicSalary + $da + $hra + $medical;

        // Calculate Insurance and PF
        $insurance = 0.07 * $grossSalary;
        $pf = 0.05 * $grossSalary;

        // Calculate Deduction
        $deduction = $insurance + $pf;

        // Calculate Net Salary
        $netSalary = $grossSalary - $deduction;

        // Display the result
        echo "Net Payment for the employee with a basic salary of $basicSalary is: $netSalary";
    }
    ?>
</body>
</html>
