<?php
    session_start();
    $_SESSION ['user'] = "jakrit";
    $_SESSION ['age'] = 22445;
    //$SESSION ['telphone'] = 0929906085;

    echo $_SESSION ['user'];
    echo "<br>";
    echo $_SESSION ['age'];
    echo "<br>";
    echo "<a href ='chapter9-session.php'>Click</a>";



?>