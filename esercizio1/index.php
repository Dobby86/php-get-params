<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>primo esercizio</title>
    </head>
    <body>

        <?php
        
            $name = $_GET["name"];
            $surname = $_GET["surname"];

         ?>

         <h1>
         <?php

           echo "Ciao: "    . $name
           . $surname .  "<br>" ;


          ?>
          </h1>



    </body>
</html>
