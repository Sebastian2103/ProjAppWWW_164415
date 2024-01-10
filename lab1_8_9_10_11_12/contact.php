

<?php

    include('cfg.php');
    session_start();


    function PokazKontakt()
    {
        echo'
        <div class="Kontakt">
            <h1 class="heading">poczta:</h1>
            <div class="formularz">
                <form class="formularz" method="post" name="mail" enctype="multipart/form-data" action="' . $_SERVER['REQUEST_URI'] . '">
                    <table class="formularz">
                        <tr><td class="kon4_t">Temat:</td><td><input type="text" name="kontakt" class="formularz" /></td></tr>
                        <tr><td class="kon4_t">Wiadomość:</td><td><input type="text" name="wiadomosc" class="formularz" /></td></tr>
                        <tr><td class="kon4_t">Nadawca:</td><td><input type="text" name="email" class="formularz" /></td></tr>
                        <tr><td>&nbsp;</td><td><input type="submit" name="x4_submit" class="kontakt" value="wyslij" /></td></tr>
                    </table>
                </form>
            </div>
        </div>
        ';
    
    }


    //jeżeli zmienna "email" została wypełniona, wysyłamy wiadomość
      if (isset($_REQUEST['email']))  {
      
      //Informację o emailu, na który będzie wysyłana wiadomość
      $admin_email = "";
      $email = $_REQUEST['email'];
      $subject = $_REQUEST['subject'];
      $comment = $_REQUEST['comment'];
      
      //wysyłamy email
      mail($admin_email, "$subject", $comment, "From:" . $email);
      
      //komunikat potwierdzający
      echo "Dziękujemy za kontakt z nami!";
      }
      
      //jeżeli zmienna z wartością "email" nie została wypełniona pokazujemy ponownie formularz
      else  {
    ?>
    
    
     <form method="post">
      Email: <input name="email" type="text" /><br />
      Temat: <input name="subject" type="text" /><br />
      Wiadomość:<br />
      <textarea name="comment" rows="15" cols="40"></textarea><br />
      <input type="submit" value="Wyślij" />
      </form>
      
    <?php
      }
    ?>
