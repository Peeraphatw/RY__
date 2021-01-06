<?php
    header('Content-Type: application/json');
    class PDOCONFIG extends PDO{
        public $member  = array();
        public function __construct()
        {
            try
            {
                parent::__construct("mysql:host=localhost;dbname=ry_db",'root','',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $this->setAttribute(PDO::ATTR_EMULATE_PREPARES,FALSE);         
            }
            catch
            (PDOExpection $e)
            {
                echo $e->getMessage();
            }
        }

        public function LoginSession($param)
        {
            $data = $this->prepare("SELECT * FROM Register_tb WHERE email = '$param[Em]' AND password = '$param[Pwd]'");
            
            if($data->execute())
            {
                return  json_encode($data->fetch(PDO::FETCH_ASSOC));
            }else{
                return json_encode("No User");
            }
        }

        public function OpenAPI()
        {
            $data = $this->prepare('SELECT * FROM Register_tb');
            $data->execute();
            $members = array();
            while($output = $data->fetch(PDO::FETCH_ASSOC))
            {
                $members[$output['id']] = array(
                    'id' => $output['id'],
                    'username' => $output['username'],
                    'email' => $output['email'],
                    'password' =>$output['password'],
                    'gender' => $output['gender'],
                    'age'=> $output['age'],
                    'country' => $output['country'],
                    'dateofbirth' => $output['dateofbirth'],
                    'phone' => $output['tel'],
                    'term' => $output['term'],
                    'letter' => $output['letter']
                );
            }
            return json_encode($members);
        }

        public function DeleteMember($id)
        {
            try
            {
                $data = $this->prepare('DELETE FROM Register_tb WHERE id = '.$id);
                $data->execute();
            }catch(PDOExpection $e)
            {
                echo $e->getMessage();
            }

             return json_encode("DELETE Record of ID".$id);
            
        }

        public function InsertMeber($param)
        {

            print_r($param);
        $__Username = $param['Usr'];
        $__Password = $param['Pwd'];
        $__Email = $param['Em'];
        if(!isset($param['Tm']))
        {
            $__Term = 'off';
        }
        else
        {
            $__Term = $param['Tm'];
        }
        if(!isset($param['Lt']))
        {
            $__Letter = 'off';
        }
        else
        {
            $__Letter = $param['Lt'];
        }  
        $__Gender = $param['Gen'];
        $__Age = $param['Age'];
        $__Country = $param['Cnt'];
        $__Tel = $param['Tel'];
        $__DateOfBirth = $param['Db'];
            
            try{
                $data = 
                $this->prepare("INSERT INTO Register_tb (username, password, email, gender, age, country, dateofbirth, tel, term, letter)
                VALUES ('$__Username', '$__Password', '$__Email','$__Gender','$__Age','$__Country','$__DateOfBirth','$__Tel','$__Term','$__Letter')");
                $data->execute();

                
            }catch(PDOExpection $e)
            {
                echo $e->getMessage();
            }
        }

        public function updateMember($param)
        {
        $__Id = $param['id'];
        $__Username = $param['Usr'];
        $__Password = $param['Pwd'];
        $__Email = $param['Em'];
        $__Gender = $param['Gen'];
        $__Age = $param['Age'];
        $__Tel = $param['Tel'];
        $__DateOfBirth = $param['Db'];
            print_r($param);
            $data = $this->prepare("UPDATE Register_tb SET username = '$__Username', password = '$__Password', email = '$__Email', gender = '$__Gender'
            , age = '$__Age'
            , dateofbirth = '$__DateOfBirth', tel = '$__Tel' WHERE id='$__Id'");
            $data->execute();
        }
    }
    // class memberApi{
    //     public function GetRequest()
    //     {
    //         $connection = new PDOCONFIG;
    //         $users = array();
    //         $data = $connection->prepare('SELECT * FROM Register_tb');
    //         $data->execute();
    //         //print_r($data->fetch(PDO::FETCH_ASSOC));

    //         //echo json_encode($data->fetch(PDO::FETCH_ASSOC));
    //         //while($output = $data->fetch())
    //     }
    // }
if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    $apiSelf = new PDOCONFIG;
    echo $apiSelf->OpenAPI();
}elseif($_SERVER['REQUEST_METHOD'] === 'POST')
{
     $apiSelf = new PDOCONFIG;

    if($_POST['ReqType'] == 'Insert')
    {
        $apiSelf->InsertMeber($_POST);
    }elseif
    ($_POST['ReqType'] == 'Delete')
    {
        echo $_POST['ReqType'];
        echo $apiSelf->DeleteMember($_REQUEST['id']);
    }
    elseif($_POST['ReqType'] == "Update"){
        $apiSelf->updateMember($_POST);
    }
    elseif($_POST['ReqType'] == "Login")
    {
        
        $result =  $apiSelf->LoginSession($_POST);
        echo $result;
        $res = json_decode($result,true);
        
        if($res['username'] != '')
        {
            session_start();
            $_SESSION['username'] = $res['username'];
        }
        

    }
}
else
{
    echo json_encode($_SERVER['REQUEST_METHOD']." / Method Not Allowed");
}


    
    
    

    