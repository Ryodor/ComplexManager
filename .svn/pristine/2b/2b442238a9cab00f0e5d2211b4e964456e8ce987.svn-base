<?php session_start(); ?>
<html>
<head>
<meta charset="UTF-8">
   <title> maths </title>
   <link rel="stylesheet" type="text/css" href="maths.css" />
   <script type="text/javascript" src="graphique.js"></script>
   </head>
   <body>
    <script>
   var point = <?php $tmp = 25;
$tmp *= $_SESSION["reel"];
   echo $tmp; ?>;
var abscisse = point + 250;
var point1 = <?php $tmp = -25;
$tmp *= $_SESSION["imaginaire"];
echo $tmp;?>;
var ordonne = point1 + 250;
</script>
   <h1> Complex manager </h1>
   <form  action="calcul.php" method="post">
   <div id="message"> <?php echo $_GET["var7"]; ?> </div>
   <fieldset>
   <legend> Complex </legend>
   <div id="message"> Formula: z = a + ib </div>
  <div id="message"> <?php echo "result = "; echo $_GET["var1"]; ?> </div>
   </fieldset>
   <fieldset>
   <legend> Conjugate </legend>
   <div id="message"> Formula: ž = a - ib </div>
   <div id="message"> <?php echo "result = "; echo $_GET["var2"]; ?> </div>
   </fieldset>
   <fieldset>
   <legend> Module </legend>
   <div id="message"> Formula: |z|=√(a² + b²) </div>
   <div id="message"> <?php echo "result = "; echo $_GET["var3"]; ?> </div>
   </fieldset>
   <fieldset>
   <legend> Argument </legend>
   <div id="message"> Formula: if b >= 0 </div>
   <div id="message"> then: &#952; = arccos(a / √(a² + b²)) </div>
   <div id="message"> else: &#952; = arccos(a / √(a² + b²)) * -1 </div>
   <div id="message"> <?php echo "result = "; echo $_GET["var4"]; ?> </div>
   </fieldset>
   <fieldset>
   <legend> Reverse </legend>
   <div id="message"> Formula: 1/z = (a - ib) / (a² + b²) </div>
   <div id="message"> <?php echo "result = "; echo $_GET["var5"]; ?> </div>
   </fieldset>
   <fieldset>
   <legend> Trigonometric form</legend>
   <div id="message"> Formula: z = r(cos&#952; + i sin&#952;) avec r = |z| </div>
   <div id="message"> <?php echo "result = "; echo $_GET["var8"]; ?> </div>
   <div id="message"> <?php echo "result = "; echo $_GET["var6"]; ?> </div>
   </fieldset>
   <br>
   <canvas id="myCanvas" width="500" height="500" style="border:1px solid; background: darkred;"></canvas>
</form>
<a href="maths.php"><input id="bouton1" type="submit" value="Back"></a>
  </body>
  </html>