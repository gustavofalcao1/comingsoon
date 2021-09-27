<?php
  $hostname = "localhost";
  $username = "smuser";
  $password = "smpassword";
  $db = "smdb";

  $dbconnect=mysqli_connect($hostname,$username,$password,$db);

  if ($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
  }

  if(isset($_POST['submit'])) {
    $mail=$_POST['mail'];

    $query = "INSERT INTO smtable (mail)
    VALUES ('$mail')";

    if (!mysqli_query($dbconnect, $query)) {
      die('Ocorreu um erro ao enviar seu email, tente novamente. Também pode nos seguir no Instagram.');
    } else {
      echo "Obrigado! Vamos avisar-te, quando tudo estiver pronto.";
      header ("location: https://www.instagram.com/atelie.amorempano/");
    }
  }
?>
