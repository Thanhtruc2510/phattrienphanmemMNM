<form action ="b9.php" method ="post">
    <label for="number">Nhap so nguyen duong n</label>
    <input type="number" id ="number" name ="number" required>
    <button type ="sumbit"> Tim so bi thieu  </button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']== "POST")
{
    $n = $_POST["number"];
}
$ngaunhien = $n - 1;
$tapso = range(1,$n);
$mangngaunhien = array();
for ($i = 0; $i < $ngaunhien; $i++) {
    $randomKey = array_rand($tapso);
    $mangngaunhien[] = $tapso[$randomKey];
    unset($tapso[$randomKey]);
}
$sothieu = array_diff($tapso, $mangngaunhien);
echo "Các số ngẫu nhiên là: " . implode(", ", $mangngaunhien) . "<br>";
echo "Số bị thiếu là: " . current($sothieu);

?>
