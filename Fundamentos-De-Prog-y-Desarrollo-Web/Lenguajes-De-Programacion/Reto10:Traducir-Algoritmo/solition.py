
# Ejercicio de platzi


""" 
@brief Función que extrae una palabra de una cadena
@param str: String que contiene el la palabra
@param start: Posición inicial de lo que queremos extraer
@param end: Posición final de lo que queremos extraer
"""
def wordExtraction( str, start, end ):
  return str[start:end]

def main():
  # Inicializamos las variables
  text = "lasfloresazules"
  start = input("Ingresa la posición inicial: ") 
  end =  input("Ingresa la posición final: ")
  # Imprimimos el resultado
  print( wordExtraction( text, int(start), int(end) ) )
    
main()