
<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['select'])){
            $selected = $_POST['select'];
            $body = $_POST['body'];
            echo 'Je hebt een mooie kleur gekozen: '.$selected;
            echo '<style>background-color: {red}};</style>';
        } else {
            echo 'voer iets in'; 
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
           #container{
                background-color: black;
                width: 150px;
                height: 100px;
                margin: auto;
           }
           #container{
                margin: auto;
           }
           #select{
               background-color: wheat;
               border: solid white 3px;
           }
           #submit{
               background-color: wheat;
               border: solid white 3px;
           }
        </style>
        <script>
            
        </script>
    </head>
    <body name="body">
        <div id="container">
            <form action="" method="POST">
                <div id="container1">
                    <select name="select" id="select">
                        <option value="rood" name="rood">Rood</option>
                        <option value="blauw" name="blauw">Blauw</option>
                        <option value="groen" name="groen">Groen</option>
                    </select>
                    <input type="submit" id="submit" name="submit">
                </div>
            </form>
        </div>
    </body>
</html>
