<head><link rel="icon" href="data:;base64,="></head>
<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $email=$_POST['email'];
    $message=$_POST['message'];
    $phone=$_POST['phone'];
    
   
        
    $error='';

    if(trim($email) == '')
        $error = 'Input Email';

    else if(trim($message) == '')
        $error = 'Input message';
    
    else if(trim($phone) == '')
        $error = 'Input phone';
    
    if($error != '') {
        echo $error;
        exit;
    }



    $mail = new PHPMailer(true);
    $mail -> CharSet = 'UTF-8';
    $mail -> setLanguage('ru', 'phpmailer/language/');
    $mail -> IsHTML(true);

    $mail -> setFrom("$email");
    $mail -> addAddress("Stepan1802@mail.ru");
    $mail -> Subject = "site";
    
    $body = '';
    $body.='<p>Email: '.$email.'</p>';
    $body.='<p>Subject: '.$_SESSION['subject'].'</p>';
    $body.='<p>Message: '.$message.'</p>';
    $body.='<p>Phone: '.$phone.'</p>';
    
    $mail -> Body = $body;
    
    if (!$mail->send()):
        echo "error";
    
    else:  ?>

    <script>
        alert("Your Messege sent successful")
        window.location.href = '/index.php';
    </script>
    
    
    //header('location : /index.php');

<?php  endif; ?>



