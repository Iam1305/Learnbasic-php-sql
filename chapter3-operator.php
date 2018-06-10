<title>Learn Operator Chapter3 </title>
<?php
$number1 = 12332153123;
$number2 = 65465132132;
$number3 = 19;
$number4 = 31;
$number5 = 20;
// operator ในภาษา php จะแทนด้วย + - * / จะสามารถคำนวนค่าต่างๆได้ทั้งจำนวนเต็มและเศษส่วน
echo 'การ + - * / % <br>';
echo $number1+$number2 . "<br>";
echo $number1-$number2 . "<br>";
echo $number1*$number2 . "<br>"; 
echo $number1/$number2 . "<br>";
echo $number1%$number2 . "<br>";
// operator ยังมีการเพิ่ม ลดค่าแบบต่างๆอีก อาธิเช่น ++ คือการเพิ่มค่าตัวเลขทีละ1 และ -- คือการลดค่าตัวเลขไปทีละ1
// หรือต้องการเพื่มจำนวนมากขึ้น ใช้ += และตามด้วยจำนวนที่ต้องการ หรือลดจำนวนใช้ -= ตามด้วยจำนวนที่ต้องการลด
// ภาษาทางการเรียกการเพิ่มลดค่าแบบนี้ว่า Increment และ Decrement
$number3--;
$number4++;
$number5+=30;
echo $number3 . "<br>";
echo $number4 . "<br>";
echo $number5;


 
?>

