<?php

 include 'config.php';


    if(isset($_POST['Usr']))
    {
        $__Username = $_REQUEST['Usr'];
        $__Password = $_REQUEST['Pwd'];
        $__Email = $_REQUEST['Em'];
        if(!isset($_REQUEST['Tm']))
        {
            $__Term = 'off';
        }
        else
        {
            $__Term = $_REQUEST['Tm'];
        }
        if(!isset($_REQUEST['Lt']))
        {
            $__Letter = 'off';
        }
        else
        {
            $__Letter = $_REQUEST['Lt'];
        }  
        $__Gender = $_REQUEST['Gen'];
        $__Age = $_REQUEST['Age'];
        $__Country = $_REQUEST['Cnt'];
        $__Tel = $_REQUEST['Tel'];
        $__DateOfBirth = $_REQUEST['Db'];

        
        $sql = "INSERT INTO Register_tb (username, password, email, gender, age, country, dateofbirth, tel, term, letter)
        VALUES ('$__Username', '$__Password', '$__Email','$__Gender','$__Age','$__Country','$__DateOfBirth','$__Tel','$__Term','$__Letter')";

        
        $exc = $connection->query($sql);

        if($exc === true){
            echo "Created";
            header("location : index.html");
            $connection->close();
        }else
        {
            echo "Error has occurred".$connection->error;
            $connection->close();
        }

    }