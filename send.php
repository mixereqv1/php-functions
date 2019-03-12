<?php

    echo('<a href="index.php">Wróć</a>');
    $conn = new mysqli('172.16.131.125', 'z_cvb', 'ewq','z_cvb');
    $sql = "INSERT INTO i_n VALUES(null,'".$_POST['imie']."','".$_POST['nazwisko']."')";
    mysqli_query($conn,$sql);
    echo('<br>Dodano do bazy danych');

    //header('location:index.php');

?>

