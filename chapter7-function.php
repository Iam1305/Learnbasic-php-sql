<?php
    function kong()
    {
        echo "jakrit";
        echo " "."pongkorntrakul";
        echo "<hr>";
        echo "number 1571051641101";

    }

    function jojo()
    {
        $name = 'Stormtrupper<hr>';
        $num1 = " "."number";
        $num2 = 1305;
        return $name.$num1.$num2;
    }

    //วิธีการเรียกใช้ function
    $p = jojo();
    //kong();
    //echo jojo();
    //echo $p;
//---------------------------X----------------------------- 
    // ทั้ง 2 function แบบเเรกสามารถเรียกใช้ได้เลย แบบที่สอง echo ก่อนหรือกำหนดตัวแปรแล้วค่อยเรียกใช้
    //function calculate เป็น function ที่มี parameter
    function calculate($number1,$number2)
    {
        $total = $number1 * $number2;
        echo 'คำตอบก็คือ!!!!!!!!'." ". $total;
    }
    calculate(300,30);
    //function calculate แบบมีการ return parameter 
    function calculate2 ($numm1,$numm2,$numm3)
    {
    $result = ($numm1+$numm2-$numm3)*9/12131650;
    return $result;
    }
        $x = calculate2(323132,8450,4303660);
        echo "<br>".$x;
//---------------------------X-----------------------------   
   // การเรียกใช้ function จะมี 2 แบบ คือ global&local
    $myname = 'jakrit'; // global variable

    function showname()
    {
        $myname = '<br>Bos'; // local variable
        echo $myname;
    }
    echo '<br>'.$myname;
    showname();
?>