<?php 

	$ad = $_POST['ad'];
	$email = $_POST['email'];
	$mesaj = $_POST['mesaj'];
	$sinif = $_POST['sinif'];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "Geçersiz E-Posta Adresi";
		header("Refresh:2; url=./index.html");
	}else{
		echo '<div style="width: 500px; margin: 50px auto; padding: 20px; background-color: #708090; border-radius:30px">';
		echo '<center><h1>İletişim Mesajı</h1></center>';

		echo $ad ? '<p><strong>Gönderici Adı:</strong> '. $ad .'</p>' : '<p style="color: red"><strong>Gönderici Adı: Belirtilmedi</strong></p>';
		echo $email ? '<p><strong>Gönderici E-Postası:</strong> '. $email .'</p>' : '<p style="color: red"><strong>Gönderici E-Postası: Belirtilmedi</strong></p>';
		echo $mesaj ? '<p style="display: inline-block;word-break: break-word; 
table-layout:fixed;"><strong>Gönderici Mesajı:</strong> '. $mesaj .'</p>' : '<p style="color: red"><strong>Gönderici Mesajı: Belirtilmedi</strong></p>';
		echo $sinif ? '<p><strong>Göndericinin Sınıfı:</strong> '. $sinif .'</p>' : '<p style="color: red"><strong>Gönderici Sınıfı: Belirtilmedi</strong></p>';
	
		echo '<div style="text-align: center; margin-top: 50px"><a href="./index.html" style="background: #333; padding: 10px 20px; color: #FFF;">Tekrar Gönder</a>';
		echo '</div>';
	}

?>