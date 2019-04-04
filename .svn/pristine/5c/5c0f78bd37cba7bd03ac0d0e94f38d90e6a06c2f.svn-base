#!/usr/bin/env php
<?php
// test.php for test in /home/pruvos_j/maths1/pruvos_j
// 
// Made by PRUVOST joffrey
// Login   <pruvos_j@etna-alternance.net>
// 
// Started on  Tue Nov 15 11:17:47 2016 PRUVOST joffrey
// Last update Fri Nov 18 10:26:25 2016 PRUVOST joffrey
//
session_start();
require ("calc.php");

$reel=$_POST["reel"];
$imaginaire=$_POST["imaginaire"];
$regex = '/^[+|-]?[0-9]*[,|.]?[0-9]+$/';
$_SESSION["reel"] = $reel;
$_SESSION["imaginaire"] = $imaginaire;

if (isset($reel))
  {
    if ($reel == NULL)
      {
	$message = "The real part is empty";
	$_SESSION["message"] = $message;
	header("Location: maths.php");
      }
    else if ($reel == "+" || $reel == "-")
      {
	$message = "You need to put something after the '+' or the '-' in the real part";
	$_SESSION["message"] = $message;
	header("Location: maths.php");
      }
    else if (substr_count($reel, "-") > 1 || substr_count($reel, "+") > 1)
      {
	$message = "You put many '-' or '+' in the real part";
	$_SESSION["message"] = $message;
	header("Location: maths.php");
      }
    else if ($reel[0] == "." || $reel[0] == ","
	     || $reel[strlen($reel) -  1] == "," || $reel[strlen($reel) -  1] == ".")
      {
	$message = "The real part can't satrt or finish with a '.' or a ','";
	$_SESSION["message"] = $message;
	header("Location: maths.php");
      }
    else if (substr_count($reel, ".") > 1 || substr_count($reel, ",") > 1)
      {
	$message = "You put many'.' ou ',' in the real part";
	$_SESSION["message"] = $message;
	header("Location: maths.php");
      }
    else if(!preg_match($regex, $reel))
      {
	$message = "The real part isn't numeric";
	$_SESSION["message"] = $message;
	header("Location: maths.php");
      }
    else
      {
	$message = "The real part is correct";
	$_SESSION["message"] = $message;
	header("Location: maths.php");
      }
  }

if (isset($imaginaire))
  {
    if ($imaginaire == NULL)
      {
	$message1 = "The imaginary part is empty";
	$_SESSION["message1"] = $message1;
	header("Location: maths.php");
      }
    else if ($imaginaire == "+" || $imaginaire == "-")
      {
	$message1 = "You need to put something after the '+' or the '-' in the imaginary part";
	$_SESSION["message1"] =$message1;
	header("Location: maths.php");
      }
    else if (substr_count($imaginaire, "-") > 1 || substr_count($imaginaire, "+") > 1)
      {
	$message1 = "You put many '-' or '+' in the imaginary part";
	$_SESSION["message1"] =$message1;
	header("Location: maths.php");
      }
    else if ($imaginaire[0] == "." || $imaginaire[0] == ","
	     || $imaginaire[strlen($imaginaire) -  1] == "," || $imaginaire[strlen($imaginaire) -  1] == ".")
      {
	$message1 = "The imaginary part can't start or finish with a '.' or a ','";
	$_SESSION["message1"] =$message1;
	header("Location: maths.php");
      }
    else if (substr_count($imaginaire, ".") > 1 || substr_count($imaginaire, ",") > 1)
      {
	$message1 = "You put many '.' or ',' in the imaginary part";
	$_SESSION["message1"] =$message1;
	header("Location: maths.php");
      }
    else if(!preg_match($regex, $imaginaire))
      {
	$message1 = "The imaginary part isn't numeric";
	$_SESSION["message1"] = $message1;
	header("Location: maths.php");
      }
    else
      {
	$message1 = "The imaginary part is correct";
	$_SESSION["message1"] = $message1;
	header("Location: maths.php");
      }
  }

if (substr_count($imaginaire, ",") > 0 && substr_count($reel, ",") < 2)
  {
    $imaginaire = str_replace(",", ".", $imaginaire);
  }
if (substr_count($reel, ",") > 0 && substr_count($reel, ",") < 2)
  {
    $reel = str_replace(",", ".", $reel);
  }

if (preg_match($regex, $imaginaire) && preg_match($regex, $reel))
  {
    if ($reel == "0" && $imaginaire == "-1")
      {
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$trigo = "$module ($n %2B $o i)";
	$argument = argument($reel, $imaginaire);
	$module = module($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "(i) / $r";
	$conjugue = "i";
	$message2 = " - i";
	$inter = " $module (cos($argument) %2B i sin($argument))";
	$nombre = "The real part is $reel and the imaginary part is $imaginaire";
	header("Location: maths2.php?var1=$message2&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
    else if ($reel == "0" && $imaginaire == "1")
      {
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$module = module($reel, $imaginaire);
	$trigo = " $module ($n %2B $o i)";
	$argument = argument($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "(- i) / $r";
	$conjugue = "- i";
	$message2 = "i";
	$inter = " $module (cos($argument) %2B i sin($argument))";
	$nombre = "The real part is $reel and the imaginary part is $imaginaire";
	header("Location: maths2.php?var1=$message2&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
    else if ($reel == "0" && $imaginaire == "0")
      {
	$message = "0";
	$m = module($reel, $imaginaire);
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$trigo = "0";
	$argument = "Indefini";
	$module = module($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "0";
	$inter = "0(cos($argument) + i sin($argument))";
	$conjugue = "0";
	$nombre = "La partie réel est $reel et la partie imaginaire est $imaginaire";
	header("Location: maths2.php?var1=$message&&var8=$inter&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre");
      }
    else if ($reel == "0")
      {
	$message = "$imaginaire i";
	$m = module($reel, $imaginaire);
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$trigo = "$m ($n %2B $o i)";
	$argument = argument($reel, $imaginaire);
	$module = module($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "(- $imaginaire i) / ($r)";
	$conjugue = "- $imaginaire i";
	$inter = " $module (cos($argument) %2B i sin($argument))";
	$nombre = "La partie réel est $reel et la partie imaginaire est $imaginaire";
	header("Location: maths2.php?var1=$message&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
    else if ($imaginaire == "0")
      {
	$message = "$reel";
	$m = module($reel, $imaginaire);
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$trigo = "$m";
	$argument = argument($reel, $imaginaire);
	$module = module($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "($reel) / ($r)";
	$conjugue = "$reel";
	$inter = "$module (cos($argument) %2B i sin($argument))";
	$nombre = "La partie réel est $reel et la partie imaginaire est $imaginaire";
	header("Location: maths2.php?var1=$message&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
    else if ($imaginaire == "-1")
      {
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$module = module($reel, $imaginaire);
	$trigo = "$module ($n %2B $o i)";
	$argument = argument($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "($reel %2B i) / $r";
	$conjugue = "$reel %2B i";
	$message2 = "$reel - i";
	$inter = " $module (cos($argument) %2B i sin($argument))";
	$nombre = "The real part is $reel and the imaginary part is $imaginaire";
	header("Location: maths2.php?var1=$message2&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
    else if ($imaginaire[0] == "-")
      {
	$imaginaire1 = $imaginaire * -1;
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$module = module($reel, $imaginaire);
	$trigo = "$module ($n %2B $o i)";
	$argument = argument($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "($reel %2B $imaginaire1 i) / $r";
	$conjugue = "$reel %2B $imaginaire1 i";
	$message2 = "$reel -  $imaginaire1 i";
	$inter = "$module (cos($argument) %2B i sin($argument))";
	$nombre = "The real part is $reel and the imaginary part is $imaginaire";
	header("Location: maths2.php?var1=$message2&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
    else if ($imaginaire == "1")
      {
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$module = module($reel, $imaginaire);
	$trigo = "$module ($n %2B $o i)";
	$argument = argument($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "($reel - i) / $r";
	$conjugue = "$reel - i";
	$message2 = "$reel %2B i";
	$inter = " $module (cos($argument) %2B i sin($argument))";
	$nombre = "The real part is $reel and the imaginary part is $imaginaire";
	header("Location: maths2.php?var1=$message2&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
    else
      {
	$n = cos(argument($reel, $imaginaire));
	$o = sin(argument($reel, $imaginaire));
	$module = module($reel, $imaginaire);
	$trigo = " $module ($n %2B $o i)";
	$argument = argument($reel, $imaginaire);
	$r = pow($reel, 2) + pow($imaginaire, 2);
	$inverse = "($reel - $imaginaire i) / $r";
	$conjugue = "$reel - $imaginaire i";
	$message2 = "$reel %2B $imaginaire i";
	$inter = " $module (cos($argument) %2B i sin($argument))";
	$nombre = "The real part is $reel and the imaginary part is $imaginaire";
	header("Location: maths2.php?var1=$message2&&var2=$conjugue&&var5=$inverse&&var3=$module&&var4=$argument&&var6=$trigo&&var7=$nombre&&var8=$inter");
      }
  }
