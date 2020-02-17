<?php include 'baglan.php';


$query = $db->prepare("SELECT * FROM user WHERE id =?");

$query->execute(array('100'));

$islem=$query->fetch();


 ?>

<div class="section" id="home" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="disply-table">
            <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                <h4><?php echo $islem["adSoyad"] ?></h4>
                <h1><br /><?php echo $islem["meslek"] ?></h1> </div>
        </div>
    </div>
</div>
