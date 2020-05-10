<?php
$mail = $_POST['mail'];
$numara;
$sifre = $_POST['sifre'];
$mailler = ["G191210044@ogr.sakarya.edu.tr", "G191210070@ogr.sakarya.edu.tr", "G191210004@ogr.sakarya.edu.tr", "G181210082@ogr.sakarya.edu.tr"];
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
            <a class="gecerli" href="girisyap.html">GİRİŞ YAP</a>
            <a href="iletisim.html">İLETİŞİM</a>
        </div>
        <div class="girisYapildi"> <?php
                                    if ($mail == $mailler[0]) {
                                        $numara = "G191210044";
                                        if ($sifre == $numara) {
                                            echo "HOŞGELDİNİZ " . $numara;
                                        } else {
                                            echo "Şifre hatalı. Yeniden Deneyiniz.";
                                        }
                                    } else if ($mail == $mailler[1]) {
                                        $numara = "G191210070";
                                        if ($sifre == $numara) {
                                            echo "HOŞGELDİNİZ " . $numara;
                                        } else {
                                            echo "Şifre hatalı. Yeniden Deneyiniz.";
                                        }
                                    } else if ($mail == $mailler[2]) {
                                        $numara = "G191210004";
                                        if ($sifre == $numara) {
                                            echo "HOŞGELDİNİZ " . $numara;
                                        } else {
                                            echo "Şifre hatalı. Yeniden Deneyiniz.";
                                        }
                                    } else if ($mail == $mailler[3]) {
                                        $numara = "G181210082";
                                        if ($sifre == $numara) {
                                            echo "HOŞGELDİNİZ " . $numara;
                                        } else {
                                            echo "Şifre hatalı. Yeniden Deneyiniz.";
                                        }
                                    } else {
                                        echo "Girdiğiniz mail adresi bulunamadı. Yeniden deneyiniz";
                                    }
                                    ?>
        </div>

</body>

</html>