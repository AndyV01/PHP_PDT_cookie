<?php
if (isset($_COOKIE['contador'])) {
  setcookie('contador', $_COOKIE['contador'] + 1, time() + 3600);
  echo "Contador: " . $_COOKIE['contador'];
} else {  
    setcookie('contador', 1, time() + 3600);
    echo "bienvenido por primera vez al sitio web";
}
?>
<html>
<head>
<title>Contador</title>
<meta charse = "utf-8">
</head>
</html>