<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' type='text/css' href='main.css'>
    </head>
    <body>
        
        <form action="send.php" method="POST">

            <input type="text" name="imie">
            <input type="text" name="nazwisko">
            <input type="submit" name="send" value="Dodaj">

        </form>

        <?php

            // function connect(){
            //     $conn = new mysqli('172.16.131.125','z_cvb', 'ewq','z_cvb');
            //     return $conn;
            // }

            function connect($hn,$un,$pw,$db){
                $conn = mysqli_connect($hn,$un,$pw,$db);
                return $conn;
            }

            //$conn = new mysqli('172.16.131.125','z_cvb', 'ewq','z_cvb');
            $sql = 'SELECT * FROM i_n';

            $result = mysqli_query(connect('172.16.131.125','z_cvb', 'ewq','z_cvb'),$sql);

            echo('<table>');
            echo('<td>Imie</td><td>Nazwisko</td>');

            while($row = mysqli_fetch_assoc($result)){
                echo('<tr>');
                echo('<td>' .$row['imie']. '</td><td>' .$row['nazwisko']. '</td>');
                echo('</tr>');
            }

            echo('</table>');

        ?>

    </body>
</html>

