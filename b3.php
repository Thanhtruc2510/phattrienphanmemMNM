<form action="b3.php" method="post">
    <label for="number">Nhập so do F </label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Tinh do C</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $n = $_POST["number"];
} 
$doC=5/9*($n-32);
echo "do C tuong ung la ".$doC;
?> 
