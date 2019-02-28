<html>
<head>
    <title>Set Cookie</title>
</head>

<body>

<?php

//MEN-SET NILAI COOKIE
setcookie('nama_cookie', 'nilai_cookie');
//MENDAPATKAN NILAI COOKIE
echo $_COOKIE['nama_cookie'];

?>

<p>
Tekan Refresh (F5);
</body>
</html>