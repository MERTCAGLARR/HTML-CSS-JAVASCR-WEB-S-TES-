<!--Login.php-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <title>Giriş</title>
    <style>
        .kutu {
            margin-top: 40px
        }
    </style>
</head>
<body>
<html>
  <head>
    <style>
      body {
        background-image: url('https://marketplace.canva.com/EAD2962NKnQ/2/0/1600w/canva-rainbow-gradient-pink-and-purple-zoom-virtual-background-_Tcjok-d9b4.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
  </head>
  <body>
  </body>
</html> 
<?php
include("baglanti2.php");

if (isset($_POST["btnGiris"]) ) 
{ 
    $kAdi=$_POST["txtKadi"];
    $parola=$_POST["txtParola"];

    if ($kAdi=="" || $parola=="") {//kullanıcı adı ya da parola boşsa hata
        echo '<div >Gerekli Alanları Boş Bırakmayınız!</div>';
        $_SESSION["id"]=0;
    }
    else{//boş değilse
    $secim="SELECT * FROM uyeler WHERE username='$kAdi' and password='$parola' ";
    $calistir=mysqli_query($baglanti,$secim);
    $kayitSayisi=mysqli_num_rows($calistir);


    if ($kayitSayisi>0) {
        session_start();

        $ilgiliKayit=mysqli_fetch_assoc($calistir);

        if($ilgiliKayit["username"]=="admin")//admin mi diye kontrol ediyor
        {
            header("location:uyelikyonlendirme.php");
        }
        else
        {//admin değilse 
            $_SESSION["id"]=$ilgiliKayit["id"];
            header("location:khome.php");
        }

    }
    else{
        echo '<div>Böyle Bir Kullanıcı bulunamadı!</div>';
        $_SESSION["id"]=0;
    }


    mysqli_close($baglanti);
    }
}

?>


<!-- Formumuzu oluşturuyoruz-->
<form id="form1" method="POST" action="login.php">
    <div class="row align-content-center justify-content-center ">
        <div class="col-md-3 kutu">
            <h3 class="text-center">Giriş Ekranı</h3>
            <table class="table">
                <tr>
                    <td>
                        <!-- Kullanıcı adı form gönderildiğinde kaybolmasın diye value ya ekliyoruz-->
                        <input type="text" ID="txtKadi" name="txtKadi" class="form-control" placeholder="Kullanıcı adı"/>

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" ID="txtParola" name="txtParola" class="form-control" placeholder="Parola"/>
                    </td>
                </tr>
               
                <tr>
                    <td class="text-center">
                    <button type="submit" class="btn btn-primary btn-block" name="btnGiris" value="Giriş">Giriş</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>
</html>
