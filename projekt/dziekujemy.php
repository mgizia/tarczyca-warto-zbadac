<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Podziekowanie</title>
    <meta name="description" content="Ankieta - Tarczyca." />
    <meta name="keywords" content="ankiety,tarczyca" />
    <link rel="stylesheet" href="css.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet" />

</head>
<body>
    <div id="container">
        <a name="gora"></a>
        <div id="box12">
            <div id="box1" class="box box12">
                <div id="left">
                    <a href="index.php">
                        <img src="logo2.png" alt="logo" />
                    </a>
                </div>
            </div>

        </div>
        
        <div id="box3456" >

            <div id="box456" >
                <div id="box4" class="box">
                            <img src="dziekimin.png" />

                </div>
                <div id="box5" class="box">


                    <?php
                            echo $SESSION['plec'];
                            echo "<br>";
                            echo $SESSION['gdzie'];
                            echo "<br>";
                            echo gettype($SESSION['gdzie']);
                            echo "<br>";
                            echo $_SESSION['diagnoza'];

                     if(isset($_SESSION['diagnoza']))
                            {
                            
                            
                            if($_SESSION['diagnoza'] == True)
                            {
                                
                                echo "Diagnoza :  TAK";
                                echo "<br>Wystąpiły u Ciebie objawy podobne jak u osób z chorobami tarczycy.</br>";
                                echo "<br>Sugerujemy udać się na sczegółowe badania krwi i do lekarza.</br>";
                                echo "<br>Nie lekceważ tej choroby nieleczona jest bardzo groźna.</br>";
                            }
                            
                            if($_SESSION['diagnoza'] == False)
                            {
                            echo "Diagnoza :  NIE";
                            echo "<br>Nie zauważono u ciebie objawów podobnych jak u osób z chorobami tarczycy.</br>";
                            echo "<br>Porofilaktycznie jednak podczas najbliższych badań kontrolnych nie zaszkodzi wykonać badanie poziomu TSH.</br>";
                            }
                            }
                            echo "*******************************";
                            echo "<br> </br><br></br> <br>Pamietaj powyższy wynik nie jest diagnozą!!!</br>";
                            echo "<br>Jest to sugestia na co powinieneś zwrócić szczególną uwagę.</br>";
                            ?>
                    
                </div>
            </div> 
        </div>
   </div>
</body>
</html>