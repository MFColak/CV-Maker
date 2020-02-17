<?php include 'baglan.php';


$query = $db->prepare("SELECT * FROM user WHERE id =?");

$query->execute(array('100'));

$islem=$query->fetch();


 ?>

<div class="section" id="about">
    <div class="container">
        <div class="col-md-6" data-aos="fade-up">
            <h4>01</h4>
            <h1 class="size-50"> <br /> Hakkımda</h1>
            <div class="h-50"></div>
            <p><?php echo $islem["hakkimda"] ?></p>


            <div class="h-50"></div>
        </div>
        <div class="col-md-6 about-img-div">

            <img src="img/<?php echo $islem["resim"] ?>" width="400" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
        </div>
    </div>
</div>
