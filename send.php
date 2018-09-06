<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = " clean-home@abv.bg,clean-home@mail.bg ,clean-home@clean-home.eu ,;
 
    $email_subject = "clean";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
      
 
    $first_name = $_POST['first_name']; // required

    $telephone = $_POST['telephone']; // not required
 
    $email_from = $_POST['email']; // required
 
    $usluga = $_POST['usluga']; // required

    $data = $_POST['data']; // required

    $adres = $_POST['adres']; // required

    $last_name = $_POST['last_name']; // required
 
     
	 
    $email_message = "ДАННИ ЗА ПОЧИСТВАНЕ\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Име: ".clean_string($first_name)."\n";

    $email_message .= "Телефон: ".clean_string($telephone)."\n";

    $email_message .= "E-mail: ".clean_string($email_from)."\n";

    $email_message .= "Услуга: ".clean_string($usluga)."\n";   
    
    $email_message .= "Дата и час: ".clean_string($data)."\n";
   
    $email_message .= "Адрес: ".clean_string($adres)."\n";

    $email_message .= "Научихме за Вас от: ".clean_string($last_name)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
 
?>
 
 
 
<!-- include your own success html here -->


<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<style type="text/css">
body {
	background-color: #17BDF4;
}
</style>


<br /><br /><br /><center><b>
ВАШАТА ЗАЯВКА Е ИЗПРАТЕНА УСПЕШНО!</center></b>
 
<META HTTP-EQUIV="refresh" content="3;URL=http://www.clean-home.eu/kontakti.html"> 
 
 
 
<?php
 
}
 
?>
<body>
</body>
</html>
