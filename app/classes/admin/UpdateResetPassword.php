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
    private $reselt;

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
        $this->sql="SELECT v_token FROM users WHERE v_token='$this->v_token'";
        $this->reselt=mysqli_query($this->con , $this->sql);

        if (mysqli_num_rows($this->reselt) > 0)
        {
            if ($this->password == $this->re_password)
            {
                $this->sql="UPDATE users SET password='$this->password' WHERE v_token='$this->v_token'";
                $this->reselt=mysqli_query($this->con , $this->sql);
                if ($this->reselt)
                {
                    $this->new_token=md5(rand());
                    $this->sql="UPDATE users SET v_token='$this->new_token' WHERE v_token='$this->v_token'";
                    $this->reselt=mysqli_query($this->con , $this->sql);
                    session_start();
                    $_SESSION['message']='Password reset successfully login now';
                    header('Location:action.php?status=login');

                }
                else
                {
                    session_start();
                    $_SESSION['message']='Password not reset';
                    header('Location:action.php?status=reset-password');
                }


            }
            else
            {
                session_start();
                $_SESSION['message']='Password not match';
                header('Location:action.php?status=reset-password');
            }

        }
        else
        {
            session_start();
            $_SESSION['message']='Invalid token';
            header('Location:action.php?status=reset-password');
        }
    }

}