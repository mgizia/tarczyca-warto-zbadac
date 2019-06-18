<?php
session_start();
if(!isset($_SESSION['dostep']) || $_SESSION['dostep']==false)
{
    header('Location: index.php');
    exit();
}
?>


    <?php
    require_once "connect.php";
    if(isset($_POST['plec'])==true && isset($_POST['wiek'])==true && isset($_POST['gdzie'])==true && isset($_POST['wojewodztwo'])==true && isset($_POST['aktywnosc_fizyczna'])==true && isset($_POST['prawidlowa_dieta'])==true && isset($_POST['sen'])==true && isset($_POST['zdiagnozowano'])==true && isset($_POST['wystepujewrodzinie'])==true && isset($_POST['choroba'])==true )
    {
        $conn = new mysqli($host,$db_user,$db_password,$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else echo "Połączono z bazą";


        $sql = "INSERT INTO ankieta(plec, wiek, srodowisko_zycia, wojewodztwo, czy_aktywnosc_fizyczna, czy_dobra_dieta, ile_snu, czy_zdiagnozowano, czy_w_rodzinie, jaka_choroba, depresja, nadcisnienie, otylosc, cukrzyca, reumatoidalne_zapalenie_stawow, celiakia, inna, wzrost_masy_ciala, znaczne_oslabienie, sennosc, uczucie_chlodu, obrzeki_podskorne, zaparcia, sucha_skora, zmeczenie, zaburzenia_pamieci, blada_skora, uczucie_goraca, potliwosc, utrata_masy_ciala, przyspieszenie_tetna, kolatanie_serca, powiekszenie_obwodu_szyi, niepokoj, drzenie_rak, bezsennosc, biegunki, zaburzenia_miesiaczkowania, problemy_z_zajsciem_w_ciaze) VALUES ('".$_POST['plec']."','".$_POST['wiek']."','".$_POST['gdzie']."','".$_POST['wojewodztwo']."','".$_POST['aktywnosc_fizyczna']."','".$_POST['prawidlowa_dieta']."','".$_POST['sen']."','".$_POST['zdiagnozowano']."','".$_POST['wystepujewrodzinie']."','".$_POST['choroba']."','".$_POST['depresja']."','".$_POST['nadcisnienie']."','".$_POST['otylosc']."','".$_POST['cukrzyca']."','".$_POST['reumatoidalne_zapalenie']."','".$_POST['celiakia']."','".$_POST['innachoroba']."','".$_POST['o1']."','".$_POST['o2']."','".$_POST['o3']."','".$_POST['o4']."','".$_POST['o5']."','".$_POST['o6']."','".$_POST['o7']."','".$_POST['o8']."','".$_POST['o9']."','".$_POST['o10']."','".$_POST['o11']."','".$_POST['o12']."','".$_POST['o13']."','".$_POST['o14']."','".$_POST['o15']."','".$_POST['o16']."','".$_POST['o17']."','".$_POST['o18']."','".$_POST['o19']."','".$_POST['o20']."','".$_POST['o21']."','".$_POST['o22']."')";

        if ($conn->query($sql) === TRUE) {
            header('Location: dziekujemy.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        //Obliczenia wyniku klasyfikator
       $_SESSION['Splec'] = $_POST['plec'];
       $_SESSION['Swiek'] = $_POST['wiek'];
       $_SESSION['Sgdzie']= $_POST['gdzie'];
       $_SESSION['Saktywnosc_fizyczna'] = $_POST['aktywnosc_fizyczna'];
       $_SESSION['Sprawidlowa_dieta']= $_POST['prawidlowa_dieta'];
       $_SESSION['Swystepujewrodzinie']= $_POST['wystepujewrodzinie'];
       $_SESSION['Schoroba']= $_POST['choroba'];
       $_SESSION['Sdepresja']= $_POST['depresja'];
       $_SESSION['Sotylosc']= $_POST['otylosc'];
       $_SESSION['Scukrzyca']= $_POST['cukrzyca'];
       $_SESSION['So1']= $_POST['o1'];
       $_SESSION['So2']= $_POST['o2'];
       $_SESSION['So3']= $_POST['o3'];
       $_SESSION['So7']= $_POST['o7'];
       $_SESSION['So9']= $_POST['o9'];
       $_SESSION['So8']= $_POST['o8'];
       $_SESSION['So10']= $_POST['o10'];
       $_SESSION['So15']= $_POST['o16'];
       $_SESSION['So21']= $_POST['o21'];
       $_SESSION['So22']= $_POST['o22'];
       require_once "dane.php";
       require_once "klasyfikator.php";


        
        unset($_SESSION['komunikat']);
    $conn->close();
    }
    else
    {
        $_SESSION['komunikat'] = "***  Uzupełnij wszystkie dane !  ***";
        
        header('Location: index.php');
    }
    $_SESSION['dostep']=false;
    ?>


