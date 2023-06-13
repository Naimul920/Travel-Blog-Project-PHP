<?php


namespace App\classes\admin;


use App\classes\database\Database;

class Catagory extends Database
{
    private $name;
    private $con;
    private $sql;
    private $result;
    private $row=[];
    private $data;
    private $i;

        public function __construct($date=null)
        {
            $this->con=$this->connect();
            if ($date)
            {
                $this->name=$date['name'];
            }
        }

        public function create()
        {
            $this->sql="SELECT * FROM catagories WHERE name='$this->name'";
            $this->result=mysqli_query($this->con , $this->sql);
            if (mysqli_num_rows($this->result) > 0)
            {
                session_start();
                $_SESSION['message']='This Catagory is already exist';
                header('Location:action.php?status=add-catagory');
            }
            else
            {
                $this->sql="INSERT INTO catagories (name) VALUES ('$this->name')";
                $this->result=mysqli_query($this->con, $this->sql);
                if ($this->result)
                {
                    session_start();
                    $_SESSION['message']='Catagory add successfull';
                    header('Location:action.php?status=add-catagory');
                }
                else
                {
                    die('Query Error..!'.mysqli_error());
                }
            }


        }
        public function manage()
        {
            $this->sql="SELECT * FROM catagories";
            $this->result=mysqli_query($this->con, $this->sql);
            if ($this->result)
            {

                $this->i = 0;
                while ($this->row=mysqli_fetch_assoc($this->result))
                {
                    $this->data[$this->i]['id'] = $this->row['id'];
                    $this->data[$this->i]['name'] = $this->row['name'];
                    $this->i++;
                }
                return $this->data;

            }
            else
            {
                die('Query Error....'.mysqli_error($this->con));
            }
        }
}