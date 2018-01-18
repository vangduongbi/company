<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gmailer {

    private $user='hosylibi';
    private $appPass='pmdxhwjfhwufpagx';
    private $debug=0;
    
    public function __construct($params=array()){
        require_once(APPPATH.'third_party/PHPMailer/class.phpmailer.php');
        require_once(APPPATH.'third_party/PHPMailer/class.smtp.php');
        if(isset($params['debug']))
            $this->debug = $params['debug'];
    }
    
    public function send_mail($from,$to,$subject,$message)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $subject="=?UTF-8?B?".base64_encode($subject)."?=\n";

        $mail             = new PHPMailer();

        /*
            Xu ly cho loi sendmail error
        */
        $mail->SMTPOptions = array(
                            'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                )
                            );


        $mail->CharSet = 'UTF-8';
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPDebug  = $this->debug;                     // enables SMTP debug information (for testing)
                                                   // 1 = errors and messages
                                                   // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier

        //Cac thong so cua mail server
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
        $mail->Username   = $this->user;  // GMAIL username
        $mail->Password   = $this->appPass;  // GMAIL App password
        //End of Cac thong so cua mail server

        $mail->SetFrom($from,$from);

        $mail->AddReplyTo($from,$from);

        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->IsHTML(true);
        $mail->AddAddress($to, "");

        if( ! $mail->Send()) {
           return false;
        } else {
           return true;
        }
    }
}
?>