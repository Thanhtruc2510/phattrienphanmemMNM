<form action="b4.php" method="post">
    <label for="numberA">Nhập số nguyên a:</label>
    <input type="number" id="numberA" name="numberA" required>

    <label for="numberB">Nhập số nguyên b:</label>
    <input type="number" id="numberB" name="numberB" required>

    <button type="submit">Tim x</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["numberA"];
    $b = $_POST["numberB"];
}
$x = -($b / $a );
echo "X la ".$x ;
?>
