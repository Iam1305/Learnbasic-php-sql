<?php
    echo $_POST['id'][0];
    echo '<br>';
    echo $_POST['id'][1];
    //echo '<br>';
    foreach ($_POST['oo']as$ooo)
    {
        echo "<br>".$ooo;
    }
?>