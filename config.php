<?php
    $connection = new mysqli('localhost','root','','DB_RY');
    if($connection->connect_errno)
    {
        echo "Connnection Error by".$connection->connect_error;
        exit();
    }