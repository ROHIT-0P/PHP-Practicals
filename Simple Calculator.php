<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required><br><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br><br>
        <select name="operator">
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (*)</option>
            <option value="div">Division (/)</option>
            <option value="mod">Modulo (%)</option>
        </select><br><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                echo "Result: $num1 + $num2 = $result";
                break;
            case 'sub':
                $result = $num1 - $num2;
                echo "Result: $num1 - $num2 = $result";
                break;
            case 'mul':
                $result = $num1 * $num2;
                echo "Result: $num1 * $num2 = $result";
                break;
            case 'div':
                if ($num2 == 0) {
                    echo "Error: Division by zero!";
                } else {
                    $result = $num1 / $num2;
                    echo "Result: $num1 / $num2 = $result";
                }
                break;
            case 'mod':
                if ($num2 == 0) {
                    echo "Error: Division by zero!";
                } else {
                    $result = $num1 % $num2;
                    echo "Result: $num1 % $num2 = $result";
                }
                break;
            default:
                echo "Invalid operator!";
                break;
        }
    }
    ?>
</body>
</html>
