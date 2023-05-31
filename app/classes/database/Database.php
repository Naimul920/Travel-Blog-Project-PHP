<?php


namespace App\classes\database;


class Database
{
    private $hostName;
    private $userName;
    private $password;
    private $dbName;
    private $link;

    protected function connect()
    {
        $this->hostName='localhost';
        $this->userName='root';
        $this->password='';
        $this->dbName='blog';
        $this->link=mysqli_connect($this->hostName , $this->userName , $this->password , $this->dbName);

        return $this->link;

    }

}