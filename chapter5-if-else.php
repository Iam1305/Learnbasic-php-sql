<?php
    $num1 = 30;
    $num2 = 50;
    // คำสั่ง if ใช้งานโดยกำหนดเงื่อนไขใน () จะเป็นการเปรียบเทียบก็ได้
    if($num1 == $num2)
    {
        echo "that true man";
    }
    else
    {
        echo "oh no!!!!!!!!";
    }

    // คำสั่ง switch จะคล้ายๆ if แต่เป็นการเปรียบเทียบค่าที่เท่ากันไหม เป็น case ไป
    echo "<hr>";
    $random = 1;
    
    switch($random)
    {
        case 1 : echo 'case1'; break;
        case 2 : echo 'case2'; break;
        case 8 : echo 'case3'; break;
        default : echo 'kuy yeah';


    }
?>