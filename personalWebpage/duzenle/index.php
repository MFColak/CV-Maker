<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Cv olustur</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>


	<div class="container-contact100" style="background-image: url(images/bg-02.jpg);">

		<div class="wrap-contact100" >
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Özgeçmişim
				</span>

				<span class="contact100-form-title-2">
					Kendi CV'nizi oluşturun:)
				</span>
			</div>

			<form class="contact100-form validate-form" action="update.php" method="post" enctype="multipart/form-data">
				<div class="wrap-input100 validate-input" data-validate="Lütfen doldurunuz">
					<span class="label-input100">İsim:</span>
					<input class="input100" type="text" name="adsoyad" placeholder="Adınız Soyadınız">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Lütfen doldurunuz">
					<span class="label-input100">Meslek:</span>
					<input class="input100" type="text" name="meslek" placeholder="Mesleğiniz">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Lütfen doldurunuz">
					<span class="label-input100">Eğitim:</span>
					<input class="input100" type="text" name="egitim" placeholder="Eğitim gördüğünüz yer">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Lütfen doldurunuz">
					<span class="label-input100">Eğitim Tarihi:</span>
					<input class="input100" type="text" name="egitimtarihi" placeholder="(ör:Kasim 2015-Ocak 2019)">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Lütfen doldurunuz">
					<span class="label-input100">2. Eğitim:</span>
					<input class="input100" type="text" name="egitim2" placeholder="Eğitim gördüğünüz yer">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Lütfen doldurunuz">
					<span class="label-input100">Eğitim Tarihi:</span>
					<input class="input100" type="text" name="egitim2tarihi" placeholder="(ör:Kasim 2015-Ocak 2019)">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Email geçersiz: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Email adresiniz">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Lütfen doldurunuz">
					<span class="label-input100">Telefon:</span>
					<input class="input100" type="text" name="telefon" placeholder="Telefon numaranız">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Lütfen doldurunuz">
					<span class="label-input100">Hakkınızda:</span>
					<textarea class="input100" name="hakkimmda" placeholder="Hakkınızda bir şeyler yazınız.."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Lütfen fotoğrafınızı ekleyin">
					<span class="label-input100">Fotoğraf:</span>
					<input class="input100" type="file" name="resim" placeholder="fotoğrafınız">
					<span class="focus-input100"></span>
				</div>
				<span>Sosyal ağlarınızı ekleyin (zorunlu değildir)</span><br><br>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Facebook:</span>
					<input  type="text" name="face" placeholder="facebook URL">

				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Twitter:</span>
					<input  type="text" name="twit" placeholder="twitter URL">

				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">İnstagram:</span>
					<input  type="text" name="insta" placeholder="instagram URL">

				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Oluştur
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="js/main.js"></script>


</body>
</html>
