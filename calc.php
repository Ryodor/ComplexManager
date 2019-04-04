#!/usr/bin/env php
<?php
// calc.php for  in /var/www/html/cmg-mat1/pruvos_j/selatn_r
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Tue Oct 25 14:02:52 2016 SELATNI Ryad
// Last update Mon Nov 14 14:33:03 2016 PRUVOST joffrey
//

function	conjugue($a, $ib)
{
  return ($a - $ib);
}

function	inverse($a, $ib)
{
  $z;
  
  $z = ($a - $ib) / ( pow($a, 2) + pow($ib, 2) );
  return ($z);
}

function	module($a, $ib)
{
  $r;
  
  $r = sqrt( pow($a, 2) + pow($ib, 2) );
  return ($r);
}

function	argument($a, $ib)
{
  $O;
   
  if ($ib >= 0)
    $O = acos( $a / module($a, $ib) );
  else
    $O = acos( $a / module($a, $ib) ) * (-1);
  return ($O);
}

function	trigo($a, $ib)
{
$z;

$z = module($a, $ib) * (cos(argument($a, $ib)) + sin(argument($a, $ib)));
}
