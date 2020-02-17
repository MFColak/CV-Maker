<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=uygulama;charset=utf8", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>
