<html>
<head>
    <title>3X3 Matrix Multiplication</title>
</head>
<body>
    <h2>3X3 Matrix Multiplication</h2>

    <?php
    // Initializing Matrix A
    $mA = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    // Initializing Matrix B
    $mB = [
        [9, 8, 7],
        [6, 5, 4],
        [3, 2, 1]
    ];

    $resultMatrix = array(
        array(0, 0, 0),
        array(0, 0, 0),
        array(0, 0, 0)
    );

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            for ($k = 0; $k < 3; $k++) {
                $resultMatrix[$i][$j] += $mA[$i][$k] * $mB[$k][$j];
            }
        }
    }
    ?>
</body>
</html>
