<?php
    Session_start();

    if(empty($_SESSION)){
        if(isset($_POST['submit'])){
            if($_POST['acc'] == 'email' && $_POST['ww'] == 'geheim')
            {
                $_SECCION['ingelogd'] = "ja";
                header(header: 'Location: page.php');
            }
        } else {
            echo '<div id=$ww></div>'style;
        }
    } else {
        echo 'error';
    }
?>


    <form action="" method= "post">
        acc<input name="acc" type="text">
        ww<input name="ww" type=text>
        <input type="submit" name="submit" value="login">
    </form>
