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

  $condition = "places south";
  echo "The condition is: $condition \n";
  switch ($condition) {
    case str_contains($condition, "weather"):
      foreach ( $weather as $key => $value) {
        // fuction to compare the value of the array with the condition
        if ( str_contains($condition, $value)) {
          echo "The city of $key has a $value weather";
        } 
      }
      break;
      
    case str_contains($condition, "places"):
      foreach ( $places as $key => $value) {
        // fuction to compare the value of the array with the condition
        if ( str_contains($condition, $value)) {
          echo "The city of $key is in the $value";
        } 
      }
      break;

    case str_contains($condition, "tourism"):
      foreach ( $turism as $key => $value) {
        // fuction to compare the value of the array with the condition
        if ( str_contains($condition, $value)) {
          echo "The city of $key has a $value tourism";
        } 
      }
      break;

    default:
      echo "Thet condition is not valid";
      break;
  }

?>
