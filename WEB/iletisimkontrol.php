<html>
<body>

İsim: <?php echo $_POST["isim"]; ?><br>
Soyisim: <?php echo $_POST["soyisim"]; ?><br>
Email: <?php echo $_POST["email"]; ?> <br>
Şehir: <?php echo $_POST["sehir"]; ?><br>
Cinsiyet: <?php echo $_POST["cinsiyet"]; ?><br>
Hobiler: <?php 
if(isset($_POST["hobiler"]))
 {
    $hobiler = $_POST["hobiler"];
 
    foreach($hobiler as $hobi) {
        echo $hobi . ", ";
    }
    } else {
    echo "Hiç hobi seçmediniz.";
    }
?>


</body>
</html>


<section id="login" class="mt-5">
    <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col">
            <div class="login-box">
                <img src="login.jpg" class="loginresim" width="300" height="300">
                    <h1>Giriş Yapınız</h1>
                        <form action="kontrol.php" method="POST">
                        <p>Kullanıcı Adı:</p>
                        <input type="text" name="username" placeholder="Kullanıcı Adı">
                        <p>Şifre:</p>
                        <input type="password" name="password" placeholder="Şifre">
                        <input type="submit" name="submit" value="Giriş">
                        </form> 
                    </div>
            </div>
          </div>
        </div>
        </div>
      </section>