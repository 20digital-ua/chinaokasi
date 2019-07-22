<?php

$result;
if (isset($_POST["name"]) && $_POST["name"] != '' &&
  isset($_POST["email"]) && $_POST["email"] != '' &&
  isset($_POST["message"]) && $_POST["message"] != ''){

  $getData = array(
    'name' => $_POST["name"],
    'email'=>$_POST["email"],
    'message'=>$_POST["message"]
  );


  $to = 'antonfedorishko17@gmail.com';
  // $to = 'antonfedorishko17@gmail.com';
  $subject = 'Subscribe Request';
  $message = '
      <h3 style="font-weight:400">Hi, You have a Subscribe Request from <strong>'.$getData['name'].'</strong></h3><br>
      <p>Detailes:</p>
      <p>Email: '.$getData['email'].'</p>
      <p>Message: '.$getData['message'].'</p>
      <br>
      <h4>Thank you!</h4>

  ';
  $headers  = 'MIME-Version: 1.0' ."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: Wonderpots.com <wonderpots@wonderpots.com>' . "\r\n";

  $result = mail($to, $subject, $message, $headers);
}else{
  $result=false;
}

echo json_encode($result); 

?>