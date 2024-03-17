<html>
<head>
    <title>Sort Array</title>
</head>
<body>
    <h2>Sort Array</h2>

    <?php
    // Initializing array
    $inputArray = [5, 3, 8, 2, 1, 9, 4, 6, 7];

    // Bubble sort algorithm to sort the array
    $n = count($inputArray);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($inputArray[$j] > $inputArray[$j + 1]) {
                // Swap $inputArray[$j] and $inputArray[$j + 1]
                $temp = $inputArray[$j];
                $inputArray[$j] = $inputArray[$j + 1];
                $inputArray[$j + 1] = $temp;
            }
        }
    }

    // Display the sorted array
    echo "<h3>Sorted Array:</h3>";
    echo "[";
    for ($i = 0; $i < $n; $i++) {
        echo $inputArray[$i];
        if ($i < $n - 1) {
            echo ', ';
        }
    }
    echo "]";
    ?>
</body>
</html>
