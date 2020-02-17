<?php

include "baglan.php";
$adSoyad=$_POST['name'];
$mesaj=$_POST['message'];
$mail=$_POST['email'];
$telefon=$_POST['phone'];

$query = $db->prepare("INSERT INTO iletisim SET
adSoyad = ?,
mail = ?,
mesaj = ?,
telefon = ?");
$insert = $query->execute(array(
     "$adSoyad", "$mail", "$mesaj","$telefon"
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "Mesajınız iletilmiştir..";
    header("Refresh:1 ;index.php");
}

    $to = "mr3essa@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "You have a message.";

    $fields = array();
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"message"} = "message";



    $body = "Here is what was sent:\r\n";

    foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }


    $send = mail($to, $subject, $body, $headers);

?>
