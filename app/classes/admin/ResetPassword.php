<?php


namespace App\classes\admin;


use App\classes\database\Database;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ResetPassword extends Database
{

    private $con;
    private $email;
    private $v_token;
    private $sql;
    private $result;
    private $row;
    private $name;


    public function __construct($data=null , $file=null)
    {
        $this->con=$this->connect();
        if ($data)
        {
            $this->email=$data['email'];
            $this->v_token=md5(rand());
        }

    }
    public function ResetPassword()
    {
        $this->sql="SELECT * FROM users WHERE email='$this->email'";
        $this->result=mysqli_query($this->con , $this->sql);

        if (mysqli_num_rows($this->result) >0)
        {
            $this->row=mysqli_fetch_assoc($this->result);
            $this->name=$this->row['name'];
            $this->sql="UPDATE users SET v_token='$this->v_token' WHERE email='$this->email'";
            $this->result=mysqli_query($this->con , $this->sql);

            $this->sendResetEmail($this->name, $this->email, $this->v_token);
            session_start();
            $_SESSION['message']='Email send successfull';
            header('location:action.php?status=password-recovery');



        }
        else
        {
            echo 'Email is not valid';
        }

    }
    public function sendResetEmail($name, $email, $v_token)
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
                            <h1>You want to reset your password</h1>
                            <h5>If you want to reset your password please click here</h5>
                            <a href='http://localhost/PHP%20PROJECT/BLOG/action.php?status=reset-password&email=$this->email&token=$this->v_token'>Click Here</a>
            ";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

}