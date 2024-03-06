<form action="b6.php" method="post">
    <label for="number">Nhập số nguyên n co 2 chu so:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Tinh tong 2 so trong n</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $number = $_POST["number"];
} 
if ($number >= 10 && $number <= 99) {
    $digit1 = $number % 10;
    $digit2 = floor($number / 10);

    $sum = $digit1 + $digit2;

    echo "Số nguyên dương có 2 chữ số là: " . $number . "<br>";
    echo "Tổng các chữ số của số là: " . $sum;
} else {
    echo "Vui lòng nhập số nguyên dương có 2 chữ số.";
}
?>
