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
    <?php echo validation_errors(); ?>
    <?php echo form_open("orientapolis/result"); ?>
      <?php foreach ($questions as $item): ?>
        <h1><?php echo $item["text"]; ?></h1>
        <?php foreach ($item["questions"] as $key => $item): ?>
          <b><?php echo $item["text"] ?></b><br />
          <?php foreach ($item["answers"] as $ans => $ansData): ?>
            <input type="radio" name="<?php echo $key ?>" value="<?php echo $ans ?>" ><?php echo $ansData["text"] ?></input><br />
            <?php endforeach; ?>
        <?php endforeach; ?>
      <?php endforeach; ?>

      <input type="submit" value="Calcola!" />
    </form>
  </body>
</html>
