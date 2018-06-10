<?php
// loops จะมี 4 อย่างหลักๆ เช่น while,do-while,for,foreach
// 1. while loops
$b = 1;
while ($b <= 10)
{
    echo $b."สวยพี่สวย<br>";
    $b++;

}

// 2. do while loops
echo "<hr>";
$h = 1;
do 
{
    echo $h . "แตก1<br>";
    $h++;
}
while($h <= 20);

// 3. for loops เหมาะกับการวนลูปที่รู้จำนวนแน่นอน
    echo "<hr>";
    for($a = 1;$a <= 30; $a++)
    {
        echo $a . "ลูกอีแหม่ม<br>";
    }

// 4. foreach loops 
    echo "<hr>";
    $o = array(82,35,356,946);
    foreach ($o as $r)
    {
        echo $r." ";
    }
?>