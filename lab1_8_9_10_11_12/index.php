<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="pl" />
        <meta name="Author" content="Sebastian Pająk" />
        <link rel="stylesheet" type ="text/css" href="style.css">
        <script src="js/button.js" defer></script>
    </head>
    <body>
        <div id="navbar">
            <a href="index.php?idp=">Strona Główna</a>
            <a href="index.php?idp=history">Historia serii</a>
            <button id="dropdown-btn">Jednostki
             <i class="fa fa-caret-down"></i>
             </button>
            <div class="dropdown-container">
                <a href="index.php?idp=akademia">Akademia</a>
                <a href="index.php?idp=necropolis">Nekropolis</a>
                <a href="index.php?idp=sylwan">Sylwan</a>
                <a href="index.php?idp=loch">Loch</a>
                <a href="index.php?idp=inferno">Inferno</a>
                <a href="index.php?idp=przystan">Przystań</a>
            </div>
            <a href="index.php?idp=bohater">Bohaterowie</a>
            <a href="index.php?idp=zamki">Zamki</a>
            <a href="koszyk.php">Sklep</a>
            <a href="index.php?idp=js1">ZabawaJs1</a>
            <a href="index.php?idp=js2">ZabawaJs2</a>
            <div class="formularz">
            <?php
            include('contact.php');
            ?>
            </div>
        </div>
        <?php
         include('cfg.php');
            include('showpage.php');
        if($_GET['idp']=='')
        {echo PokazPodstrone(1);}
        if($_GET['idp']=='history')
        {echo PokazPodstrone(2);}       
         if($_GET['idp']=='akademia')
        {echo PokazPodstrone(11);}
        if($_GET['idp']=='necropolis')
        {echo PokazPodstrone(4);}     
        if($_GET['idp']=='loch')
        {echo PokazPodstrone(5);}
        if($_GET['idp']=='sylwan')
        {echo PokazPodstrone(6);}
        if($_GET['idp']=='inferno')
        {echo PokazPodstrone(7);}
        if($_GET['idp']=='przystan')
        {echo PokazPodstrone(8);}
        if($_GET['idp']=='bohater')
        {echo PokazPodstrone(9);}
        if($_GET['idp']=='zamki')
        {echo PokazPodstrone(12);}
        if($_GET['idp']=='js1')
        {echo PokazPodstrone(13);}
        if($_GET['idp']=='js2')
        {echo PokazPodstrone(14);}

        ?>
    </body>
</html>