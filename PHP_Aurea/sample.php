<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "aurea_kim");

    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if (!$connection){
        die("Fail to connect");
    }
    else{
        echo"Connect Succesful";
    }
?>