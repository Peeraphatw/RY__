<?php
    $connection = new mysqli('localhost','root','','RY_DB');
    if($connection->connect_errno)
    {
        echo "Connnection Error by".$connection->connect_error;
        exit();
    }