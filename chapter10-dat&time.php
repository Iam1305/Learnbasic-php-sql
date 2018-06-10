<?php
    // link สำหรับดู คำสั่งใช้วันที่เวลา php.net
    date_default_timezone_set("Asia/Bangkok"); //ถ้าจะให้เวลาตรงต้องตั้งtime zone ก่อน
    $timenow = time();
    echo date("d/m/Y  H:i:s",$timenow);
    echo "<hr>";
    //echo print_r (getDate()); การเรียก getdate ออกมาดูคำสั่ง

    $timenow2 = getDate();
    echo $timenow2['year'];
    echo "<br>";
    //function STR to time
    $yesterday = strtotime("yesterday");
    echo date("d/m/Y",$yesterday);
    
    echo "<hr>";
    $tomorrow = strtotime("tomorrow");
    echo date("d-m-Y",$tomorrow);

    // function เช็ควันที่ ใช้ if ในการเช็ค
    if (checkdate(2,29,2021))
    {
        echo "datevalid";
    }
    else
    {
        echo "date fail";
    }
    echo "<hr>";
    // function ที่ใช้ในการหาระยะห่างระหว่างวัน
    $datetime = new Datetime('2-5-2018');
    $datetime2 = new Datetime('3-12-2018');
    $interval = $datetime->diff($datetime2);
    echo $interval->format('ต่างกันอยู่ %a วัน');



?>