<?php include 'baglan.php';


$query = $db->prepare("SELECT * FROM user WHERE id =?");

$query->execute(array('100'));

$islem=$query->fetch();


 ?>

<div class="section" id="contact">
    <div class="container">
        <div class="col-md-12">
            <h4>04</h4>
            <h1 class="size-50">İletişim</h1>
            <div class="h-50"></div>
        </div>
        <div class="col-md-4" data-aos="fade-up">

            <h3>Telefon </h3>
            <p><?php echo $islem["telefon"]; ?></p>

            <h3>Email</h3>
            <p><?php echo $islem["mailadres"] ?> </p>

            <h3>Sosyal Ağlar</h3>



            <ul class="social">
                <li><a href="<?php echo $islem["facebook"] ?>"><i class="ion-social-facebook"></i></a></li>
                <li><a href="<?php echo $islem["twitter"] ?>"><i class="ion-social-twitter"></i></a></li>
                <li><a href="<?php echo $islem["instagram"] ?>"><i class="ion-social-instagram"></i></a></li>

            </ul>
            <div class="clearfix"></div>
            <div class="h-50"></div>
        </div>

        <div class="col-md-8" data-aos="fade-up">
            <form class="contact-bg" id="contact-form" name="contact" method="post" novalidate="novalidate">
                <input type="text" name="name" class="form-control" placeholder="Ad Soyad" />
                <input type="email" name="email" class="form-control" placeholder="E-mail" />
                <input type="text" name="phone" class="form-control" placeholder="Telefon numarası" />
                <textarea name="message" class="form-control" placeholder="Mesajınız" style="height:120px"></textarea>
                <button id="submit" type="submit" name="submit" class="btn btn-glance">GÖNDER</button>
                <div id="success">
                    <p class="green textcenter"> Mesajınız başarıyla iletilmiştir. </p>
                </div>
                <div id="error">
                    <p> Mesaj gönderilirken sorun oluştu. </p>
                </div>
            </form>
        </div>
    </div>
</div>
