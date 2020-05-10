<?php
$isim=$_POST['isim'];
$soyisim=$_POST['soyisim'];
$konu=$_POST['konu'];
$mesaj=$_POST['Mesajiniz'];
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        echo "Mesajınız alınmıştır. En kısa süre içerisinde tarafınıza dönüş sağlanacaktır.";
   ?>
    <hr>
	<table>
		<tr>
		<td>Adı Soyadı</td>
		<td>:</td>
		<td>
		<?php
		echo $_POST["isim"]."&nbsp;".$_POST["soyisim"];
		?>
		</td>
		</tr>
		
		<tr>
		<td>Cinsiyetiniz</td>
		<td>:</td>
		<td>
		<?php
        if(isset($_POST['cinsiyet']))
		{
		echo $_POST['cinsiyet'];
		}
		?>
		</td>
		</tr>
		
		<tr>
		<td>Konu</td>
		<td>:</td>
		<td>
		<?php
		if($konu=='Şikayet')
		{
		echo "Şikayet";
		}
		if($konu=='Öneri')
		{
		echo "Öneri";
		}
		if($konu=='Bilgi Talebi')
		{
		echo "Bilgi Talebi";
		}
		if($konu=='Giriş Yapamıyorum')
		{
		echo "Giriş Yapamıyorum";
        }
        if($konu=='İstek')
		{
		echo "İstek";
		}
		if($konu=='Teşekkür')
		{
		echo "Teşekkür";
        }
        if($konu=='Diğer')
		{
		echo "Diğer";
		}
		?>
		</td>
		</tr>
		
		<tr>
		<td>Mesajınız</td>
		<td>:</td>
		<td>
		<?php
		echo $mesaj;
        ?>
        
		</td>
		</tr>
		
	</table>
</body>

</html>