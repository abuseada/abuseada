<?php 
    class Contact {
        private $host="localhost";
        private $user="root";
        private $pass="";
        private $db="abuseada";
        public $mysqli;
        
        public function __construct() {
            return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
        }
        

        public function contact_us($data) {
            $name=$data['name'];
            $email=$data['email'];
            $phone=$data['phone'];
            $massege=$data['massege'];
            $q="insert into contact_us set name='$name', email='$email', phone_whatsapp='$phone', massege='$massege'";
            $data=$this->mysqli->query($q);
            if($data==true){
                $body="One message received from Abu Seada contact us. details are below..<br> name='$name', email='$email', phone_whatsapp='$phone', massege='$massege'";
                return $this->sent_mail("abuseadatestphp@gmail.com", "Message received from Abu Seada", $body);
            }
        }

        public function sent_mail($to, $subject, $body) {
            $mailFromName="Abu Seada";
            $mailFrom="abuseadatestphp@gmail.com";
            /////////////////////////////////////////////////////////////
            //Mail Header
            $mailHeader = 'MIME-Version: 1.0'."\r\n";
            $mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
            $mailHeader .= "Reply-To: $mailFrom\r\n";
            $mailHeader .= "Return-Path: $mailFrom\r\n";
            //$mailHeader .= "CC: $mailCC\r\n";
            //$mailHeader .= "BCC: $mailBCC\r\n";
            $mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
            $mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
            /////////////////////////////////////////////////////////////
            //Email to Admin
            if(mail($to, $subject, $body, $mailHeader)){
            return true;
            }else{
            return false;
            }
        }
    }
?>