<form action="b7.php" method="post">
    <label for="number">Nhập số giay can hoan thanh cua cong viec:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Tinh ra don vi thoi gian</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $n = $_POST["number"];
}
$hour   = floor($n / 3600);
$minute = floor((($n/3600)-$hour)*60);
$second = $n - ($hour * 3600 + $minute *  60) ;

echo " So s can chuyen doi cua cong viec $n <br/>";
echo " Gio can hoan thanh la  $hour <br/> ";
echo "So phut can hoan thanh la $minute <br/> ";
echo "So giay la  $second <br/>" ;
?>
