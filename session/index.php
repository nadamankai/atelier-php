<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>cours php</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" >
    <style>
.border-0{

   width:600px;
}
.c1{
    background-color: #9F4294FF;
    border: none;
    color: white;
    padding: 20px 34px;
    text-align: center;
    text-decoration: none;
    font-size: 20px;

    cursor: pointer;
}
    </style>
</head>
<body class="bg-light">
<form action="saveNote.php" method="post">
<header style="background-color:#9F429426;" >

    <div class="c1">
        MY GOOGLE KEEP
    </div>
</header>
<main>

<div class="container-fluid" style="background-color:#9F429426;" >
    <div  class="row py-3 px-3"  >
        <div class="col-8"  >

        <input type="text" name="title" class="border-0" placeholder="titre" style="height:30px;" ></input>
         <textarea  name="note"  class="border-0 " placeholder="note" style="height:265px" ></textarea>

    </div>
        <div class="col-4" >
            <img src="image/im2.webp"  >
        </div>
    </div>




    <div  class="row py-3 px-3"   >
        <div class="row">
            <div class="col"> <a href="#" class="link-primary"><img src="image/ic1.png"   width="27px"> </a></div>
            <div class="col"><a href="#" class="link-primary"><img src="image/ic2.png" width="30px" ></a></div>
            <div class="col"><a href="#" class="link-primary"><img src="image/ic3.png"  width="32px" ></a></div>
            <div class="col"><a href="#" class="link-primary"><img src="image/ic4.GIF"  width="30px"  ></a></div>
            <div class="col"><a href="#" class="link-primary"><img src="image/ic5.png"  width="30px"  ></a></div>
            <div class="col"><a href="#" class="link-primary"><img src="image/ic6.png"  width="30px"  ></a></div>
            <div class="col"><input type="file" name="fichier"/></div>

        </div>
    </div>

    <div class="btn-group py-2" role="group" >
        <input type="submit" class="btn btn-secondary" style="background-color:#9F4294FF;" value="valider">
        <a  class="btn btn-secondary" style="background-color:#9F4294FF;"  href="note.php">voir liste des notes</a>
    </div>

</div>
    </div>
</form>
</main>

</body>
</html>