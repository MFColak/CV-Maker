<?php

try {
     $db = new PDO("mysql:host=localhost;dbname=uygulama;charset=utf8", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}



//resim güncelleme
$yukleklasor="../img/";
$tmp_name = $_FILES['resim']['tmp_name'];
$name = $_FILES['resim']['name'];
$boyut = $_FILES['resim']['size'];
$tip = $_FILES['resim']['type'];
$uzanti =substr($name,-4,4);
$rastgelesayi1=rand(10000,50000);
$rastgelesayi2=rand(10000,50000);
$resimad=$rastgelesayi1.$rastgelesayi2.$uzanti;

//dosya varmı kontrol
if (strlen($name) == 0) {
  echo "bir dosya seciniz";
  exit();
}

//boyut kontrol
if ($boyut>(1024*1024*10)) {
  echo "dosya boyutu cok fazla";
  exit();
}
//tip kontrol

if ($tip != 'image/jpeg' && $tip != 'image/png' && $uzanti != '.jpg') {
  echo "yalnizca jpeg veya png olabilir";
}
move_uploaded_file($tmp_name, "$yukleklasor/$resimad");



//post işlemi
$adSoyad=$_POST['adsoyad'];
$meslek=$_POST['meslek'];
$hakkimda=$_POST['hakkimmda'];
$egitim=$_POST['egitim'];
$egitimtarihi=$_POST['egitimtarihi'];
$egitim2=$_POST['egitim2'];
$egitim2tarihi=$_POST['egitim2tarihi'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$face=$_POST['face'];
$twit=$_POST['twit'];
$insta=$_POST['insta'];


//Database Güncelleme
$query = $db->prepare("UPDATE user SET
adSoyad = ?,
meslek = ?,
hakkimda = ?,
resim = ?,
egitim = ?,
egitimTarihi=?,
egitim2=?,
egitim2Tarihi = ?,
telefon = ?,
mailadres =?,
facebook = ?,
twitter = ?,
instagram = ?
");
$insert = $query->execute(array(
     "$adSoyad", "$meslek", "$hakkimda","$resimad","$egitim","$egitimtarihi","$egitim2","$egitim2tarihi","$telefon","$email","$face","$twit","$insta"
));
if ( $insert ){
    $last_id = $db->lastInsertId();

    header("Refresh:1 ;../index.php");
}




 ?>
