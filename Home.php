<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin panel</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body >

        <form action="Home.php" method="post">
            <div class="headr">
                <header>
                    <p>Programmation WEB </p>
                </header>            
                </div>
                <div class="sidenav">
                    <img src="user (1).png" alt="user icon" ><br>
                    <li><button class="tablinks" onclick="openCity(event, 'Home')"><a href="Home.php">Home</a></button></li>
                    <li><button class="tablinks" onclick="openCity(event, 'cours')"><a href="cours.html">Cours</a></button></li>
                    <li><button class="tablinks" onclick="openCity(event, 'TP')"><a href="TP.html">TP</a></button></li>
                     <li><form action="logout.php" method="post" > 
                            <input type="submit" class="tablinks" style="margin-top: 70%;" value="Logout"> 
                        </form> </li>
                </div>
                <div id="Home" class="tabcontenthome">
                    <div class="container">
                    <p>cette page web rassemble les documents nécessaire pour apprendre les bases de la programmation web ,un module enseigné lors de la 1ème année cycle ingenieur informatique à l'école ENSA de Tanger  </p></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.19545200228!2d-5.8943978!3d35.7373121!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87d746836ac7%3A0x20774c4ac415e78d!2sENSA%20%3A%20%C3%89cole%20Nationale%20des%20Sciences%20Appliqu%C3%A9es_Tanger!5e0!3m2!1sfr!2sma!4v1703700836119!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>
        </form>
    </body>
