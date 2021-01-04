<?php

 include 'config.php';


    if(isset($_POST['Usr']))
    {
        $__Username = $_REQUEST['Usr'];
        $__Password = $_REQUEST['Pwd'];
        $__Email = $_REQUEST['Em'];
        $__Term = $_REQUEST['Tm'];
        $__Letter = $_REQUEST['Lt'];
        $__Gender = $_REQUEST['Gen'];
        $__Age = $_REQUEST['Age'];
        $__Country = $_REQUEST['Cnt'];
        $__Tel = $_REQUEST['Tel'];
        $__DateOfBirth = $_REQUEST['Db'];

        print_r($_REQUEST);
      
        exit();

        $sql = "INSERT INTO Register_tb ('username','password','email','gender','age','country','dateofbirth','Tel','term','letter')";
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