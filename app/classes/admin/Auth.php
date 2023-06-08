<?php


namespace App\classes\admin;

use App\classes\database\Database;


class Auth extends Database
{
    private $email;
    private $password;
    private $con;
    private $sql;
    private $result;
    private $row=[];

    public function __construct($data=null , $file=null)
    {
        $this->con= $this->connect();
        if ($data)
        {
            $this->email       = $data['email'];
            $this->password    = md5($data['password']);
        }

    }

    public function login()
    {
        $this->sql="SELECT * FROM users WHERE email='$this->email' AND password='$this->password'";
        $this->result=mysqli_query($this->con, $this->sql);

        if (mysqli_num_rows($this->result) > 0)
        {
            $this->row=mysqli_fetch_assoc($this->result);

            if ($this->row['v_status']==1)
            {
                session_start();
                $_SESSION['id']=$this->row['id'];
                $_SESSION['name']=$this->row['name'];
                header('Location:action.php?status=home');

            }
            else
            {
                session_start();
                $_SESSION['message']='Please verify your email address';
                header('Location:action.php?status=login');
            }
        }
        else
        {
            session_start();
            $_SESSION['message']='Email and password is invalid';
            header('Location:action.php?status=login');
        }

    }

    public function signOut()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:action.php?status=login');
    }

}