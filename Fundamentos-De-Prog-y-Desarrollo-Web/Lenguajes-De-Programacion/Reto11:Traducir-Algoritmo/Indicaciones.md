En la siguiente clase encontrarás un ejemplo práctico en PHP en el cual pediremos recomendaciones de lugares de Colombia de acuerdo con su clima, ubicación o atractivo turístico.

Para entender este reto en términos prácticos, realizaremos las siguientes acciones:

* Definimos un arreglo asociativo que tendrá una estructura “llave” => “valor” donde almacenaremos las condiciones climáticas de cada región definida.

Por ejemplo:
```php
$weather = array(“Bogotá” => “Cold”, “Montería” => “hot”, “Medellín” => “mild”);
```
* Realizaremos el paso anterior en dos ocasiones más para definir un array de ubicación y turismo.

* Con una estructura switch recibiremos la condición y de acuerdo a este valor buscaremos en un array para obtener la respuesta que buscamos.

* Si preguntamos por el clima y que sea frío, buscaremos el valor cold dentro del array $weather.

* Si preguntamos por la ubicación y que sea al norte, buscaremos el valor north dentro del array $ubication.

* Si preguntamos por el turismo y que sea mar, buscaremos el valor sea dentro del array $tourism.

Así se vería este ejercicio gráficamente:
![PHP image](https://static.platzi.com/media/user_upload/APL-PHP-d6368e45-6896-4712-a905-13c3daa43293.jpg)

¡No te rindas! ¡Este es el algoritmo más avanzado que desarrollaremos en este curso! En las próximas 2 clases nuestra profesora Ana Belisa te mostrará su solución. Pero tú puedes hacerlo mejor. Tienes todas las herramientas necesarias para resolverlo. ¡Inténtalo con todas tus fuerzas!