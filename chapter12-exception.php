<?php 
// การเช็คความผิดพลาดโดยใช้ try catch ในการดักจับข้อผิดพลาดได้
$pass = 4846455;
try {
if($pass=="48464555")
{
    echo "Login success";
}
else
{
    throw new Exception("รหัสมึงไม่ถูกไอควาย");
}
}
catch(Exception $e)
{
    echo "ผิดพลาดครับ" . $e->getMessage()."<br>";
    echo "บรรทัดที่" . $e->getLine();
}
?>