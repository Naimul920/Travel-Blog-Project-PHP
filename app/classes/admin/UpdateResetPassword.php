<?php


namespace App\classes\admin;
use App\classes\database\Database;


class UpdateResetPassword extends Database
{
    private $email;
    private $v_token;
    private $password;
    private $re_password;
    private $con;
    private $sql;

    public function __construct($data=null , $file=null)
    {
        $this->con=$this->connect();
        if ($data)
        {
            $this->v_token        =$data['v_token'];
            $this->email        =$data['email'];
            $this->password     =md5($data['password']);
            $this->re_password  =md5($data['re_password']);
        }

    }

    public function updatePassword()
    {

        if ($this->password == $this->re_password)
        {
            $this->sql="UPDATE users SET password='$this->password' WHERE v_token='$this->v_token'";
            $this->result=mysqli_query($this->con , $this->sql);

            if ($this->result)
            {
//                $this->v_token=md5(rand());
//                $this->sql="UPDATE users SET v_token='$this->v_token' WHERE email ='$this->email'";
//                $this->result=mysqli_query($this->con , $this->sql);

                session_start();
                $_SESSION['message']='Password reset successfully login now';
                header('Location:action.php?status=login');
            }
            else
            {
                die('Query problem..'.mysqli_error($this->sql));
            }

        }
        else
        {
            session_start();
            $_SESSION['message']='Password is not match';
            header('Location:action.php?status=reset-password');
        }
    }

}