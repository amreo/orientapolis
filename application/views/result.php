<!DOCTYPE html>
<html>
	<script>
		function calcola()
		{
			console.log("Calcolo in corso");
      <?php foreach ($positions as $pos => $value): ?>
        <?php echo $pos . "= " . $value["value"] . ";"; ?>
      <?php endforeach; ?>

      //It assume that x and y esist and the boundaries are [-1, 1]
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			ctx.moveTo(400,0);
			ctx.lineTo(400,800);
			ctx.moveTo(0,400);
			ctx.lineTo(800,400);
			pX = (x+1)*400;
			pY = (y+1)*400;
      console.log(pX, pY);
      ctx.fillRect(pX-5,pY-5,10,10);
			ctx.stroke();
		}
	</script>
	<body>
    <?php foreach ($positions as $pos => $value): ?>
      <p><?php echo $pos . "= " . $value["value"]; ?></p>
    <?php endforeach; ?>
		<canvas id="myCanvas" width="800" height="800" style="border: 2px solid black;">

		</canvas>

    <script>
      calcola();
    </script>
	</body>
</html>
