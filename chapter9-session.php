<?php 
    session_start();

    echo $_SESSION['user'];
    echo "<br>";
    echo $_SESSION['age'];
    
    echo "<a href = 'logout.php'>Logout</a>";


?>