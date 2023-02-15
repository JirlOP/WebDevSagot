Ejercicio 11: Traducir algoritmo de arrays asociativos
<?php
  $weather = array(
    "Bogotá" => "cold", 
    "Montería" => "hot", 
    "Medellín" => "mild"
  );
  $places = array(
    "Bogotá" => "north", 
    "Montería" => "south", 
    "Medellín" => "east",
    "Cali" => "north"
  );
  $turism = array(
    "Bogotá" => "mountain", 
    "Montería" => "beach",
    "Medellín" => "desert",
    "Cali" => "valley"
  );

  $condition = "tourism valley";
  echo "The condition is: $condition \n";
  $words = explode(" ", $condition);
  switch ($words[0]) {
    case "weather" :
      $city = array_search($words[1], $weather);
      echo "The city of $city has a $words[1] weather";
      break;
      
    case "places" :
      $city = array_search($words[1], $places);
      echo "The city of $city is at $words[1]";
      break;

    case "tourism" :
      $city = array_search($words[1], $turism);
      echo "The city of $city has a $words[1]";
      break;

    default:
      echo "Thet condition is not valid";
      break;
  }

?>
