<form action ="b8.php" method ="post">
    <label for="number">Nhap so nguyen duong n</label>
    <input type="number" id ="number" name ="number" required>
    <button type ="sumbit"> Hien thi tat ca cac so trong bai toan </button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']== "POST")
{
    $n = $_POST["number"];
}
if($n > 0)
{
while  ($n > 1)
{
    echo "$n <br/>";
    if($n % 2 == 0){
        $n = $n / 2;
    }else{
        $n = 3*$n+1;   
    }

}  
echo "1"; 
}else{
    echo "Moi ban nhap lai so nguyen duong n ";
}

?>
