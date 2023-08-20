<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="assets/css/styles.css">
            <title>Document</title>
        </head>
        <body style="background-color: #121717">
        
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                    <img src="assets/img/logo-nav.png" alt="logo">
                        <h1 class="home__title">GALAXY GYM</h1>
                        <p class="home__description">
                            Te vom ajuta să-ți modelezi și să-ți construiești
                            corpul ideal

                        </p>
            <div>
            <h2 class="section__subtitle">Formularul a fost trimis cu succes! Veti fi contactat in cel mai scurt timp. Multumim! </h2>
            </div><br><br><br>
            
            <a href="index.html"><button type="submit" class="button">
                            Prima pagină
            </button></a>

            <div class="home__images">
                        <img src="assets/img/home-img.png" alt="home image" class="home__img">
                        
                        <div class="home__triangle home__triangle-3"></div>
                        <div class="home__triangle home__triangle-2"></div>
                        <div class="home__triangle home__triangle-1"></div>
                    </div>
        </body>
        </html>
<?php
    $fldName = $_POST['fldName'];
    $fldEmail = $_POST['fldEmail'];
    $fldPhone = $_POST['fldPhone'];

    // Conexiunea la baza de date
    $conn = new mysqli('localhost','root','','db_contact') or die("Nu s-a putut conecta la baza de date!");
    
    if($conn->connect_error){
        die('Connection Failed   : '.$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into tbl_contact(fldName, fldEmail, fldPhone)
            values(?, ?, ?)");
        $stmt->bind_param("ssi",$fldName, $fldEmail, $fldPhone);
        $stmt->execute();

       
        // header("Location: http://localhost/galaxytest/index.html"); COMANDĂ DE TEST

        $stmt->close();
        $conn->close();
    }
?>