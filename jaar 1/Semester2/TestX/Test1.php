<!DOCTYPE html>
<html>
    <head>
        <style>
        
        </style>
        </script>
    </head>
    <body>
        <form method="post">
            <input name="name" type="text"><br>
            <input name="wachtwoord" type="password"><br>
            <input type="submit">
        </form>
        <?php
                if (isset($_POST['name'])) 
                {
                    $login = $_POST['name'];
                    $password = $_POST['wachtwoord'];

                    echo $login . $password;

                    if ($password == "bob") {
                        echo "dat is correct";
                    } else {
                        echo "fout";
                    }

                }
                else {
                    echo "vul eerst wat in voordat je de knop invoert";
                }

            ?>

            <!-- <?php 
             include ("...");
            ?> -->
    </body>
</html>
