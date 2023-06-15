<?php
$servername = "localhost";
$username = "root";
$Wachtwoord = "";
$dbname = "users";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// echo "<table>";
while($row = mysqli_fetch_assoc($result)) {
    // echo "<tr><td>".$row['Naam']."<tr><td>".$row['Achternaam']."<tr><td>".$row['Wachtwoord'];
    $users[] = [
        'Naam' => $row['Naam'],
        'Achternaam' => $row['Achternaam'],
        'Wachtwoord' => $row['Wachtwoord']
    ];
  }
// echo "</table>";












$toegang = false;

  foreach($users as $user) {
    if($user['Naam'] && $user['Achternaam'] && $user['Wachtwoord']) {
            $toegang = true;
      }
  }

  if($toegang) {
    echo "Yes, je mag binnen";
  } else {
    header("Location: ");
  }

?>