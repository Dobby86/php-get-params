<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>esercizio 2</title>
    </head>
    <body>

                <?php
                    $email = $_GET["email"];

                    $emailDotIndex = strpos($email, '.');


                 ?>
                 <div class="test">

                         <?php


                     if (strpos($email, '.')) echo "OKKKKKKKK!!";
                     else echo "Oh Nooooooo!!!"


                       ?>

                 </div>


    </body>
</html>
