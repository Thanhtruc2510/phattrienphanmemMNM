<form action="b5.php" method="post">
    <label for="numberA">Nhập số nguyên a:</label>
    <input type="number" id="numberA" name="numberA" required>

    <label for="numberB">Nhập số nguyên b:</label>
    <input type="number" id="numberB" name="numberB" required>

    <label for="numberB">Nhập số nguyên c:</label>
    <input type="number" id="numberC" name="numberC" required>

    <button type="submit">So lon nhat la</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["numberA"];
    $b = $_POST["numberB"];
    $c = $_POST["numberC"];

}
$BigINT =($a > $b) ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);
echo " So lon nhat trong 3 so nguyen la ".$BigINT; 
?>
