<?php
$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$email = $_POST['email'];
$tel = $_POST['telNo'];
$konu = $_POST['konu'];
$mesaj = $_POST['Mesajiniz'];
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="stilim.css">
    <meta charset="utf-8">
</head>

<body>
<div class="container-fluid">
        <div class="üst">
            <a href="hakkimda.html">HAKKIMDA</a>
            <a href="ozgecmis.html">ÖZGEÇMİŞ</a>
            <a href="sehrim.html">ŞEHRİM</a>
            <a href="kulturelmiras.html">KÜLTÜREL MİRAS</a>
            <a href="girisyap.html">GİRİŞ YAP</a>
            <a class="gecerli" href="iletisim.html">İLETİŞİM</a>
        </div><br><br><br><div class=orta>
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
                echo $_POST["isim"] . "&nbsp;" . $_POST["soyisim"];
                ?>
            </td>
        </tr>

        <tr>
            <td>Cinsiyetiniz</td>
            <td>:</td>
            <td>
                <?php
                if (isset($_POST['cinsiyet'])) {
                    echo $_POST['cinsiyet'];
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Email Adresiniz</td>
            <td>:</td>
            <td>
                <?php
                echo $email;
                ?>
            </td>
        </tr>

        <tr>
            <td>Telefon Numaranız</td>
            <td>:</td>
            <td>
                <?php
                echo $tel;
                ?>
            </td>
        </tr>

        <tr>
            <td>Konu</td>
            <td>:</td>
            <td>
                <?php
                if ($konu == 'Şikayet') {
                    echo "Şikayet";
                }
                if ($konu == 'Öneri') {
                    echo "Öneri";
                }
                if ($konu == 'Bilgi Talebi') {
                    echo "Bilgi Talebi";
                }
                if ($konu == 'Giriş Yapamıyorum') {
                    echo "Giriş Yapamıyorum";
                }
                if ($konu == 'İstek') {
                    echo "İstek";
                }
                if ($konu == 'Teşekkür') {
                    echo "Teşekkür";
                }
                if ($konu == 'Diğer') {
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
</div>
</div>
</body>

</html>