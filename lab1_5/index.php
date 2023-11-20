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
            <a href="">Zamki</a>
        </div>
        <?php 
        $strona = '';
        if($_GET['idp']=='')
        {$strona = './html/glowna.html';}
        if($_GET['idp']=='history')
        {$strona = './html/history.html';}       
         if($_GET['idp']=='akademia')
        {$strona = './html/akademia.html';}
        if($_GET['idp']=='necropolis')
        {$strona = './html/necropolis.html';}     
        if($_GET['idp']=='loch')
        {$strona = './html/loch.html';}
        if($_GET['idp']=='sylwan')
        {$strona = './html/sylwan.html';}
        if($_GET['idp']=='inferno')
        {$strona = './html/inferno.html';}
        if($_GET['idp']=='przystan')
        {$strona = './html/przystan.html';}
        if($_GET['idp']=='bohater')
        {$strona = './html/bohaterowie.html';}

        if(file_exists($strona))
        {
            include($strona);
        }
        ?>
    </body>
</html>