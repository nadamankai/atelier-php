<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .btn {
            background-color: #9F4294FF;
            border: none;
            color: white;
            padding: 20px 34px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>


<body  class="d-grid gap-3">
<a class="btn position-relative" style="width:50px background-color:#9F4294FF" href="index.php" >Retour</a>


<?php if (isset ($_SESSION["notes"]) ): ?>
    <?php foreach( $_SESSION["notes"] as $notes): ?>

        <div style="width:900px" class="w-75 p-3"   border style="background-color:#9F4294FF">

            <div class="w-75 p-3 " style="background-color:#CEA2C9"  >
                <?= $notes[0] ? $notes[0] : "No Title" ?>
                <p  align="end" class="text-muted"  >  <font size="-1"> <?= $notes[1]  ?>  </font> </p>

            </div>
            <div  class="w-75 p-3" style="background-color:#9F42941A;"> <?= $notes[2] ? $notes[2] : "..." ?></div>

        </div>
        </div >

    <?php endforeach; ?>


<?php endif ; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">


</script>
</html>

</body>