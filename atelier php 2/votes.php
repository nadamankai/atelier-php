<?php
if(!isset($_COOKIE['votes'])) {
    setcookie($name = 'votes', $value = $_POST['vote'], $expire = time() + 3600 * 2);

    ?>
    <script>alert("ok ");</script>

    <?php

}
else{
?>
<script>alert("vous avez deja voté(e) ");</script>

<?php
    echo "votre vote est ".$_COOKIE['votes'];
}
?>