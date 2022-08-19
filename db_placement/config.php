<?php
    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','db_placement');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    // if($db)
    // {
    //     echo "connected";
    // }
    // else
    // {
    //     echo "not connected";
    // }
?>