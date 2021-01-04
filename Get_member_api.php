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
    echo $apiSelf->DeleteMember($_REQUEST['id']);
}
else
{
    echo json_encode($_SERVER['REQUEST_METHOD']." / Method Not Allowed");
}


    
    
    

    