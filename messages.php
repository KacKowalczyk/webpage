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
<main class="phpclass">
<section class="loginfo">
    
<?php
    include "db-connection.php";
    if(isset($_POST['username'], $_POST['password'])){
        $username=$_POST['username'];
        $password=$_POST['password'];


    $username=stripcslashes($username);
    $password=stripcslashes($password);

    $sql="SELECT * FROM users where username='$username' and password='$password'";
    $result=mysqli_query($db, $sql);
    $row=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);

    if($count==1){
        $_SESSION["name"]=$username;
        echo "jestes zalogowany/a";
    }else{
        echo "bledny login/haslo";
    }
    }


?>
</section>
<section class="messages-php">
    <h2>WIADOMOŚCI</h2>
<?php

include "db-connection.php";

if(isset($_SESSION["name"])){
    $sql="SELECT ID, name, mail, phone, message FROM messages";
    $result=mysqli_query($db, $sql);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "ID: " .$row["ID"]. " Name: " .$row["name"]. " Mail: " .$row["mail"]. " Phone: " .$row["phone"]." Wiadomość: " .$row["message"]."<br>";
        }

    }else{
        echo"Brak danych";
    }
}else{
    echo "nie działa";
}
mysqli_close($db);
?>

</section>
<a href="index.html"> WYLOGUJ SIĘ I WRÓC DO MENU GLOWNEGO</a>

</main>
<footer>
            <p><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjlxMHOg5L7AhUWCBAIHShWAUAQFnoECBIQAQ&url=https%3A%2F%2Fpl.wikipedia.org%2Fwiki%2FFAQ&usg=AOvVaw3_1H0Nb0TiV1PQI10x7ne2" target="_blank"> FAQ</a></p><p>© NMGYM </p><p> <a href="regulamin.html"> REGULAMIN</a></p>
        </footer>
        
    </body>
    </html>