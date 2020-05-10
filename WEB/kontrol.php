
<?php

$kullaniciAdi = "b191210055@sakarya.edu.tr";
$sifre= "123";

if($_POST['username']==$kullaniciAdi && ($_POST['password'])==$sifre)
{
   if (filter_var($kullaniciAdi, FILTER_VALIDATE_EMAIL) && !empty($_POST['username']) && !empty($_POST['password']))
   {
      echo "Hoşgeldiniz $kullaniciAdi";
   } 
  
}
else
{
   header("Location:login.html");
}
?>