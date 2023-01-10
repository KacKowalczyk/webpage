<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMGYM</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <header>    
        <h1> <a href="index.html"> NMGYM</a></h1>
        <ul class="menu">
            <li><a href="onas.html">o nas</a></li>
            <li><a href="cennik.html">cennik</a></li>
            <li><a href="kontakt.html">kontakt</a> </li>
            <li><a href="login.html">login</a></li>
        </ul>
    </header>
    <?php
    include "db-connection.php";
    
    if(isset($_POST['submit']) && !empty($_POST['submit']))
    {
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];

        $insert = mysqli_query($db, "INSERT INTO `messages` (`ID`, `name`, `mail`, `phone`, `message`) VALUES (NULL, '$name', '$mail', '$phone', '$message')");
    
    if(!$insert){
        printf("WYSTĄPIŁ BŁĄD: %s\n", mysqli_error($link));
    }
    else{
        echo "Twoja Wiadomość została wysłana!";
    }
    }
    else{
        echo "Brak danych w formularzu";
    }
    mysqli_close($db);
    ?>
    <footer>
            <p><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjlxMHOg5L7AhUWCBAIHShWAUAQFnoECBIQAQ&url=https%3A%2F%2Fpl.wikipedia.org%2Fwiki%2FFAQ&usg=AOvVaw3_1H0Nb0TiV1PQI10x7ne2" target="_blank"> FAQ</a></p><p>© NMGYM </p><p> <a href="regulamin.html"> REGULAMIN</a></p>
        </footer>
        
    </body>
    </html>