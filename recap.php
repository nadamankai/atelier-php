<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>



<?php
echo "nom : ".htmlspecialchars($_POST['nom'])."<br>";
echo "prenom : ".htmlspecialchars($_POST['prenom'])."<br>";
echo "nombre sandwitchs : ".htmlspecialchars($_POST['nbre'])."<br>";
echo "type sandwitch : ".htmlspecialchars($_POST['type'])."<br>";
echo "adresse : ".htmlspecialchars($_POST['adresse'])."<br>";
if(!empty($_POST['ingredients'])){
    $i=1;
foreach($_POST['ingredients'] as $val) {
    echo "ingredients numero  $i : " . $val . "<br>";
    $i++;
}
}
if($_POST['nbre']<10)
echo "prix =".$_POST['nbre']*4;
else {
    echo "prix =".$_POST['nbre']*4*0.9;
}
?>
<?php

?>
<?php
function random_1($car) {
    $string = "";
    $chaine = "abcdefghijklmnpqrstuvwxy";
    srand((double)microtime()*1000000);
    for($i=0; $i<$car; $i++) {
        $string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
}
if(!empty($_FILES)){
    $name=$_FILES['fichier']['name'];
    $type=$_FILES['fichier']['type'];
   $file_extention=strrchr($name,".");
    $files_tmp_name =$_FILES['fichier']['tmp_name'];
    $n=random_1(7);
    $file_dest = 'files/'.$n.$file_extention ;
    move_uploaded_file($files_tmp_name,$file_dest);
}
?>


</body>
</html>
