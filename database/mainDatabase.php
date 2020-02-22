<?php
    class DataBaseConnection
    {
        public static function getMysqlConnection()
        {
            try{
                $conn=new PDO("mysql:host=localhost;dbname=Matrimony","root","");
                 return $conn;
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
        }
    }
?>