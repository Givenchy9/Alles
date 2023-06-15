<?php
    Session_start();

    if(empty($_SESSION)){
        if(isset($_POST['submit'])){
            if($_POST['acc'] == 'email' && $_POST['ww'] == 'geheim')
            {
                $_SECCION['ingelogd'] = "ja";
                header(header: 'Location: page.php');
            }
        } 
        // $out = '<form action="" method= "post">
        //         acc<input name="acc" type="text">
        //         ww<input name="ww" type=text>
        //         <input type="submit" name="submit" value="login">
        //         </form>';
        
    }
    // else {
    //     die('gelukt')
    // }
?>


<form action="" method= "post">
                acc<input name="acc" type="text">
                ww<input name="ww" type=text>
                <input type="submit" name="submit" value="login">
                </form>


 <!-- echo $out


$$$_SESSION['ingelogd'] == "ja"

<input type="submitOff" name="submit" value="login">

if($isset(POST['submitOff']))
{
    $_SESSION =[]
    header()

}  -->