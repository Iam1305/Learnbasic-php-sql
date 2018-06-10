<?php 
// คำสั่ง strlen ที่ใช้เช็คจำนวนตัวอักษร
$str = ('mynameiskalaandmynameisjakritpongkorntrakul');
echo strlen($str);
echo "<hr>";
// คำสั่ง strpos ใช้หาตำแหน่งของคำ การนับจะเรื่มจาก 0 ไปทีละตัวอักษร
echo strpos($str,"jakrit");
echo "<hr>";
// คำสั่ง trim ใช้ในการณีที่ userกรอกข้อมูลที่มีการเว้นวรรคเข้ามา แต่ trim จะไม่นับตัวช่องเว้นวรรคนั้น
$str = "      jakritpong   ";
echo trim($str);
echo "<hr>";
// คำสั่ง htmlspecialchars จะแสดงทุกตัวอักษรไม่ว่าจะเป็น <> หรือตัวอักษร
$str2 = '<strong>1305</storng>';
echo htmlspecialchars($str2);
echo "<hr>";
// คำสั่ง strip_tags จะตรงกันข้ามกับ htmlspecialchars จะนับแค่ text
echo strip_tags($str2);
echo "<hr>";
// คำสั่ง wordwrap ตัดข้อความขึ้นบรรทัดใหม่ ทุกๆกี่ตัวอักษรสามารถทำได้
$str3 = ("hello my name is Jakrit Pongkorntrakul I like you");
echo wordwrap($str3,30,"<br>");
echo "<hr>";
// คำสั่ง explode เอาไว้ใช้ที่มีชุดข้อความเยอะหรือมีตัวคั่น เราจะเอาข้อความที่เราต้องการ
$strnumber ="one-two-three-four";
$strnum = explode('-',$strnumber);
echo $strnum[2]." ".$strnum[3];
echo "<hr>";
// คำสั่ง md5 เอาไว้ใช้เข้ารหัส string เป็นโค๊ดลับ คือการเข้ารหัสทางเดียว
$string ="bos";
$stringmd5 = md5 ($string);
echo $stringmd5;
if ($stringmd5 === md5($string)) //วิธีเช็ค
{
    echo "<br>ok";
}
else{
    echo "<br>kuy";
}
echo "<hr>";
// คำสั่ง substr เอาไว้สำหรับดึงตัวอักษรออกมา ดึงจากตำแหน่งไหนที่เท่าไร
$str4 = "mynameiskala";
echo substr($str4,5,5); // ใน(ตัวแปร,เริ่มดึงจากตำแหน่งที่,เอามากี่ตัวอักษร)
echo "<hr>";
// คำสั่ง rand เอาไว้ใช้สุ่มค่าเลขไม่ซ้ำกัน
echo rand(100,1000); //ถ้าใส่เลขใน () จะกำหนดให้เริ่มสุ่มตั้งแต่->เท่าไร สามารถกำหนดได้
echo "<hr>";
// คำสั่ง max and min-- maxจะเอาไว้หาค่าเลขที่มีค่าสูงสุด minหาค่าน้อยสุด
echo max(22,33,-79);
echo "<br>";
echo min(-100,-16851,-53211);
echo "<hr>";
// คำสั่ง number_format เอาไว้ใส่ , ให้กับตัวเลข
$num7 = 9845612384561.845612384561;
echo number_format($num7,6); // สามารใส่ , เพื่อจะเอาทศนิยมได้


?>