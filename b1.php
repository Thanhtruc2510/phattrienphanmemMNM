 <form action="b1.php" method="post">
    <label for="number">Nhập số nguyên n:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Tính giá trị tuyệt đối</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $n = $_POST["number"];
} 
    $absoluteValue = abs($n);
    echo "Giá trị tuyệt đối của $n là: " . $absoluteValue;
?>
