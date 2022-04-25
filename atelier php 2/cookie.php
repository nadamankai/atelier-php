<?php
if(!isset($_COOKIE['lang'] ) || empty($_COOKIE['lang']))
setcookie('lang','fr',time()+3600*24,null,null,false,true);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>langue de l'utilisateur<?= htmlspecialchars($_COOKIE['lang'])?></p>

</body>
</html>