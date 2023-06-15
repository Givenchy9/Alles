<?php

    if(isset($_POST['firstname']) && 
        isset($_POST['lastname']) && 
        isset($_POST['password'])){

            include "../db_conn.php";

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $password = $_POST['password'];

            $data = "firstname=".$firstname."&lastname=".$lastname;

            if (empty($firstname)){
                $em = "Voer je voornaam in";
                header("Location: ../index.php?error=$em");
                exit;
            } else if (empty($lastname)){
                $em = "Voer je achternaam in";
                header("Location: ../index.php?error=$em");
                exit;
            } else if (empty($password)){
                $em = "Voer je wachtwoord in";
                header("Location: ../index.php?error=$em");
                exit;
            } else {
                


                $sql = "INSERT INTO users(firstname, lastname, password)
                        VALUES(?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$firstname, $lastname, $password]);

                header("Location: ../index.php?succes=Jouw account is succes vol gemaakt");
                exit;
            }
    } else {
        header("Location: ../index.php?error=error");
        exit;
    }
?>