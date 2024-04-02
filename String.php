<!DOCTYPE html>
<html>
<head>
    <title>String Length</title>
</head>
<body>
    <h2>String Length</h2>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $inputString = $_POST['inputString'];
        $length = 0;
        $index = 0;
        while (isset($inputString[$index])) {
            $length++;
            $index++;
        }
        $word_count = str_word_count($inputString);
        echo "<p>Length of the string: $length</p>";
        echo "<p>Word Count: $word_count</p>";
    }
    ?>
</body>
</html>
