<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>

<body>
    <?php
    require_once "./scripts/connect.php";
    // echo $conn->connect_errno; 0 lub 1
    $sql = "SELECT * FROM `users`;";
    $result = $conn->query($sql);

    while ($user = $result->fetch_assoc()) {
        // echo "test<br>";
        // print_r($user);
        // var_dump($user);
        $year = substr($user["birthday"], offset: 0, length: 4);
    echo <<< USERS
        Imię i nazwisko: $user[firstName] $user[lastName]<br>
        Data Urodzenia: $user[birthday]
        <hr>;
    USERS;
    }
    ?>

</body>

</html>