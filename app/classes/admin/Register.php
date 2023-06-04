<?php


namespace App\classes\admin;
use App\classes\database\Database;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
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
    public function sendEmailVarifi($name, $email, $v_token)
    {
        $this->name=$name;
        $this->email=$email;
        $this->v_token=$v_token;


        $mail = new PHPMailer(true);
        try {
            //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'naim.necmoney@gmail.com';                     //SMTP username
            $mail->Password   = 'qsmxyyazhirjorra';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('naim.necmoney@gmail.com', 'Md Naimul Islam');
            $mail->addAddress($this->email, $this->name);     //Add a recipient
//            $mail->addAddress('ellen@example.com');               //Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            //Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Welcome Travel BD';
            $mail->Body    = "
                            <h1>You have register with Travel BD</h1>
                            <h5>Verify your email address to login please the link below</h5>
                            <a href='http://localhost/PHP%20PROJECT/BLOG/action.php?status=verify-email&token=$this->v_token'>Click Here</a>
            ";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

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
                $this->sendEmailVarifi($this->name, $this->email, $this->v_token);

                $_SESSION['message']='Registration successfully please Varifi your email';
                header('Location:action.php?status=register');
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