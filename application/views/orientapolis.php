<DOCTYPE html>
<html>
  <head>
      <title>Orientapolis</title>
  </head>
  <body>
    <p>
      Per calcolare la tua posizione politica, rispondere alle domande e cliccare
      su "calcola!".
    </p>
    <form method="post">
      <?php foreach ($domande as $domanda): ?>
        <?php echo $domanda["testo"] ?><br />
        <input type="radio" name="<?php echo $domanda ?>" value="r1"><?php echo $domanda["r1"] ?></input><br />
        <input type="radio" name="<?php echo $domanda ?>" value="r2"><?php echo $domanda["r2"] ?></input><br />
        <input type="radio" name="<?php echo $domanda ?>" value="r3"><?php echo $domanda["r3"] ?></input><br />
        <input type="radio" name="<?php echo $domanda ?>" value="r4"><?php echo $domanda["r4"] ?></input><br />
      <?php endforeach; ?>
    </form>
  </body>
</html>
