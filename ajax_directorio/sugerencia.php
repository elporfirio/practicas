<?php

$nombre[]="Agustin Carrasco Navarro";
$nombre[]="Alejandro Hernandez Zamora";
$nombre[]="Alejandro Perez Fuentes";
$nombre[]="Alheli Baños Mujica";
$nombre[]="Aline Gonzalez";
$nombre[]="Alama Sanchez Cuevas";
$nombre[]="Argelia Castillo";
$nombre[]="Arturo Islas";
$nombre[]="Benjamin Mares";
$nombre[]="Blanca D. Cedillo Velazquez";
$nombre[]="Carlos Alberto Sanchez Martinez";
$nombre[]="Carlos Anguiano Larrauri";
$nombre[]="Emma Varela Granjero";
$nombre[]="Erika Rivera Arcieniega";
$nombre[]="Gabriel Alfaro Hernandez";
$nombre[]="Gabriela Padilla Aboites";
$nombre[]="Gilberto Coronado Lopez";
$nombre[]="Giovanni Jimenez";
$nombre[]="Gladys Mares";
$nombre[]="Hector Javier Ramirez Gonzalez";
$nombre[]="Hugo Alberto Gutierrez";
$nombre[]="Isidro Sandoval Magos";
$nombre[]="Izchel Aguilar Aguilar";
$nombre[]="Jorge Eduardo Hernandez Ballina";
$nombre[]="Jorge Eduardo Rojas Mena";
$nombre[]="Jorge Hernandez Aguilar";
$nombre[]="Juan Sanchez Fernandez";
$nombre[]="Leonardo Ruiz Plancarte";
$nombre[]="Lev Ivanuska Monroy Lopez";

$q=$_GET["q"];

if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($nombre); $i++)
    {
    if (strtolower($q)==strtolower(substr($nombre[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint="<a href=\"#\" onclick=\"obtenerExtension('".$nombre[$i]."');\">".$nombre[$i]."</a>";
        }
      else
        {
        $hint=$hint."<br><a href=\"#\" onclick=\"obtenerExtension('".$nombre[$i]."');\">".$nombre[$i]."</a>";
        }
      }
    }
  } else{$hint = "";}

if ($hint == "")
  {
  $response="No hay coincidencias";
  //$response=$hint;
  }
else
  {
  $response=$hint;
  }

echo $response;

?>
