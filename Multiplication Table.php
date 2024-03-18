<!DOCTYPE html>
<html>
<body>

<h2>Multiplication Table</h2>
    <form method="post">
        <label for="num1">Enter a number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <button type="submit" name="multiply">Multiply</button>
    </form>

<?php
if (isset($_POST['multiply'])) 
        $num1 = $_POST['num1'];

$num1 = 2;
for($i=1;$i<=10;$i++){
$result = $num1*$i;
echo"$result <br>";
}
?> 

</body>
</html>