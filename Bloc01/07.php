<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          DAWDWES Xavier Sastre Act.Oct24
        </h1>
        <h2>
          SOLUCIONS ALS EXERCICIS
        </h2>
        <h2>
          <br>1. Sortida per pantalla i variables
        </h2>
      </div>

      <div id="content">
      <?php
        $nombre = "Xavier Sastre";
        $adressa = "Carrer Qualsevol, 13 - Baixos";
        $telefon = "971 123456";

        echo $nombre, "<br>";
        echo $adressa, "<br>";
        echo $telefon, "<br>";
      ?>
                
      <br><br><hr><br>Codi font:<br>
      <?php
        highlight_string('
          <?php
            $nombre = "Xavier Sastre";
            $adressa = "Carrer Qualsevol, 13 - Baixos";
            $telefon = "971 123456";

            echo $nombre, "<br>";
            echo $adressa, "<br>";
            echo $telefon, "<br>";
          ?>
        ');
      ?>
      </div>
      <div id="footer">
        © Xavier Sastre
      </div>
    </div>
  </body>
</html>
