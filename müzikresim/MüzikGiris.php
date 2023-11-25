<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Müzik</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>MÜZİK</h1>
    <h3>Müzik Görüntülemek İçin Bilgilerinizi Girmeniz Gerek!!!</h3>
    <form action="Müzik.php" method="post">
        Adınız: <input type="text" name="ad" size="20">
        <br><br>
        Yaşınız: <input type="number" name="yas" size="20">
        <br><br>
        Cinsiyetiniz: <input type="radio" name="cins" value="Erkek"> Erkek <input type="radio" name="cins" value="Kadın"> Kadın
        <br><br>
        Kendimi Seviyorum!! <input type="checkbox" name="secim">
        <br><br>
        Öneri Görüntüle: <input type="submit" value="Görüntüle">
    </form>
    <h4>(Bilgilerin alınma sebebi popülasyonun dağılımını anlamak içindir!!!)</h4>
</body>
</html>
