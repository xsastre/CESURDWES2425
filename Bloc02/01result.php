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
          <br>2. Recollida de dades per teclat
        </h2>
      </div>

      <div id="content">
        <?php
          echo $_POST['x'], " * ", $_POST['y'], " = ", $_POST['x'] * $_POST['y'];
        ?>
      </div>
      <div id="footer">
        © Xavier Sastre
      </div>
  </div>
    </body>
</html>
