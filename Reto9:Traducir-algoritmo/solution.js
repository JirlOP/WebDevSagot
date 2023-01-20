
function algoritmo( numbers ) {
  let max = -Infinity;  // less infinity

  // look if the number is greater than the current max
  for ( let i = 0; i < numbers.length; ++i) {
    max = Math.max( max, numbers[i] );
  } 

  // print the max number
  console.log( max == -Infinity ? "No numbers" : max );
}

// recieve an array of n numbers 
algoritmo( [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ] );

