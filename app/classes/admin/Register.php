<?php


namespace App\classes\admin;
use App\classes\database\Database;
session_start();


class Register extends Database
{
    private $name;
    private $phone;
    private $email;
    private $password;
    private $v_token;
    private $con;
    private $sql;
    private $result;
    private $row;


    public function __construct($data=null, $file=null)
    {
        $this->con=$this->connect();


            if ($data)
            {
                $this->name=$data['name'];
                $this->phone=$data['phone'];
                $this->email=$data['email'];
                $this->password=md5($data['password']);
                $this->v_token=md5(rand());
            }
//            if (empty($this->name) || empty($this->phone) || empty($this->email) || empty($this->password))
//            {
//                $_SESSION['message']='Field can not be empty';
//                header('Location:action.php?status=register');
//            }




    }

    public function add()
    {
        $this->sql="SELECT email FROM users WHERE email='$this->email'";
        $this->result=mysqli_query($this->con, $this->sql);
        $this->row = mysqli_fetch_assoc($this->result);

        if (empty($this->row['email']))
        {
            $this->sql="INSERT INTO users(name, phone, email, password, v_token) VALUES ('$this->name','$this->phone','$this->email','$this->password','$this->v_token')";
            $this->result=mysqli_query($this->con, $this->sql);
            if ($this->result)
            {
//                return 'Registration successfully please login now';
                $_SESSION['message']='Registration successfully please login now';
                header('Location:action.php?status=login');
            }
            else
            {
                die('Query Problem..'.mysqli_error($this->con));
            }

        }
        else {
//            return 'This email is already exist';
            $_SESSION['message']='This email is already exist';
            header('Location:action.php?status=register');

        }


    }
}