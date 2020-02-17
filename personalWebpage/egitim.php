<?php include 'baglan.php';


$query = $db->prepare("SELECT * FROM user WHERE id =?");

$query->execute(array('100'));

$islem=$query->fetch();


 ?>

<div class="section" id="experience">
    <div class="container">
        <div class="col-md-12">
            <h4>02</h4>
            <h1 class="size-50">Eğitim</h1>
            <div class="h-50"></div>
        </div>
        <div class="col-md-12">
            <ul class="timeline">
                <li class="timeline-event" data-aos="fade-up">
                    <label class="timeline-event-icon"></label>
                    <div class="timeline-event-copy">
                        <p class="timeline-event-thumbnail"><?php echo $islem["egitimTarihi"] ?></p>
                        <h3></h3>
                        <h4><?php echo $islem["egitim"] ?></h4>
                        <p><strong></strong>
                            <br>  </p>
                    </div>
                </li>
                <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                    <label class="timeline-event-icon"></label>
                    <div class="timeline-event-copy">
                        <p class="timeline-event-thumbnail"><?php echo $islem["egitim2Tarihi"] ?></p>
                        <h3></h3>
                        <h4><?php echo $islem["egitim2"] ?></h4>
                        <p></p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
