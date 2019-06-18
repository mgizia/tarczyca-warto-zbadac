<?php
require_once "dane.php";

if ( $_SESSION['Splec'] == 'K')
   {
        $plecT = $k_tak;
        $plecN = $k_nie;
   }
   else
    {
        $plecT = $m_tak;
        $plecN = $m_nie;
    } 

if ($_SESSION['Sgdzie'] == 1)
    {
        $gdzieT = $srodo1A_tak;
        $gdzieN = $srodo1A_nie;
    }
    else
    {
        $gdzieT = $srodo2A_tak;
        $gdzieN = $srodo2A_nie;
    }


    if ($_SESSION['Saktywnosc_fizyczna'] == true)
    {
        $aktywT = $aktywT_tak;
        $aktywN = $aktywT_nie;
    }
    else
    {
        $aktywT = $aktywF_tak;
        $aktywN = $aktywF_nie;
    }

      if ($_SESSION['Sprawidlowa_dieta'] == true)
    {
        $dietaT = $dietaT_tak;
        $dietaN = $dietaT_nie;
    }
    else
    {
        $dietaT = $dietaF_tak;
        $dietaN = $dietaF_nie;
    }

        if ($_SESSION['Swystepujewrodzinie'] == true)
    {
        $wrodzinieT = $wrodzinieT_tak;
        $wrodzinieN = $wrodzinieT_nie;
    }
    else
    {
        $wrodzinieT = $wrodzinieF_tak;
        $wrodzinieN = $wrodzinieF_nie;
    }

        if ($_SESSION['Sdepresja'] == 1)
    {
        $depresjaT = $depresjaT_tak;
        $depresjaN = $depresjaT_nie;
    }
    else
    {
        $depresjaT = $depresjaF_tak;
        $depresjaN = $depresjaF_nie;
    }

            if ($_SESSION['Sotylosc'] == 1)
    {
        $otyloscT = $otyloscT_tak;
        $otyloscN = $otyloscT_nie;
    }
    else
    {
        $otyloscT = $otyloscF_tak;
        $otyloscN = $otyloscF_nie;
    }

             if ($_SESSION['Scukrzyca'] == 1)
    {
        $cukrzycaT = $cukrzycaT_tak;
        $cukrzycaN = $cukrzycaT_nie;
    }
    else
    {
        $cukrzycaT = $cukrzycaF_tak;
        $cukrzycaN = $cukrzycaF_nie;
    }

               if ($_SESSION['So1'] == '1')
    {
        $wzrostmasyT = $wzrostmasyT_tak;
        $wzrostmasyN = $wzrostmasyT_nie;
    }
    else
    {
        $wzrostmasyT = $wzrostmasyF_tak;
        $wzrostmasyN = $wzrostmasyF_nie;
    }

           if ($_SESSION['So2'] == '1')
    {
        $oslabienieT = $oslabienieT_tak;
        $oslabienieN = $oslabienieT_nie;
    }
    else
    {
        $oslabienieT = $oslabienieF_tak;
        $oslabienieN = $oslabienieF_nie;
    }

           if ($_SESSION['So3'] == '1')
    {
        $sennoscT = $sennoscT_tak;
        $sennoscN = $sennoscT_nie;
    }
    else
    {
        $sennoscT = $sennoscF_tak;
        $sennoscN = $sennoscF_nie;
    }

              if ($_SESSION['So7'] == '1')
    {
        $suchaskoraT = $suchaskoraT_tak;
        $suchaskoraN = $suchaskoraT_nie;
    }
    else
    {
        $suchaskoraT = $suchaskoraF_tak;
        $suchaskoraN = $suchaskoraF_nie;
    }

       if ($_SESSION['So9'] == '1')
    {
        $pamiecT = $pamiecT_tak;
        $pamiecN = $pamiecT_nie;
    }
    else
    {
        $pamiecT = $pamiecF_tak;
        $pamiecN = $pamiecF_nie;
    }

       if ($_SESSION['So8'] == '1')
    {
        $zmeczenieT = $zmeczenieT_tak;
        $zmeczenieN = $zmeczenieT_nie;
    }
    else
    {
        $zmeczenieT = $zmeczenieF_tak;
        $zmeczenieN = $zmeczenieF_nie;
    }

        if ($_SESSION['So10'] == '1')
    {
        $bladaskoraT = $bladaskoraT_tak;
        $bladaskoraN = $bladaskoraT_nie;
    }
    else
    {
        $bladaskoraT = $bladaskoraF_tak;
        $bladaskoraN = $bladaskoraF_nie;
    }

        if ($_SESSION['So15'] == '1')
    {
        $kolataniesercaT = $kolataniesercaT_tak;
        $kolataniesercaN = $kolataniesercaT_nie;
    }
    else
    {
        $kolataniesercaT = $kolataniesercaF_tak;
        $kolataniesercaN = $kolataniesercaF_nie;
    }

       if ($_SESSION['So16'] == '1')
    {
        $szyjaT = $szyjaT_tak;
        $szyjaN = $szyjaT_nie;
    }
    else
    {
        $szyjaT = $szyjaF_tak;
        $szyjaN = $szyjaF_nie;
    }

       if ($_SESSION['So21'] == '1')
    {
        $miesiaczkaT = $miesiaczkaT_tak;
        $miesiaczkaN = $miesiaczkaT_nie;
    }
    else
    {
        $miesiaczkaT = $miesiaczkaF_tak;
        $miesiaczkaN = $miesiaczkaF_nie;
    }

           if ($_SESSION['So22'] == '1')
    {
        $ciazaT = $ciazaT_tak;
        $ciazaN = $ciazaT_nie;
    }
    else
    {
        $ciazaT = $ciazaF_tak;
        $ciazaN = $ciazaF_nie;
    }


    $P_TAK = $plecT * $gdzieT * $aktywT * $dietaT * $wrodzinieT * $depresjaT * $otyloscT * $cukrzycaT * $wzrostmasyT * $oslabienieT * $sennoscT * $suchaskoraT * $pamiecT * $zmeczenieT * $bladaskoraT * $kolataniesercaT * $szyjaT * $miesiaczkaT * $ciazaT;
    $P_NIE = $plecN * $gdzieN * $aktywN * $dietaN * $wrodzinieN * $depresjaN * $otyloscN * $cukrzycaN * $wzrostmasyN * $oslabienieN * $sennoscN * $suchaskoraN * $pamiecN * $zmeczenieN * $bladaskoraN * $kolataniesercaN * $szyjaN * $miesiaczkaN * $ciazaN;

if($P_TAK >= $P_NIE)
    {
        $_SESSION['diagnoza'] = True;
    } 
    else
    {
        $_SESSION['diagnoza'] = False;
    }
?>