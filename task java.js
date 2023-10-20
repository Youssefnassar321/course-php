//Q1
//Event loop : An event loop is something that pulls stuff out of the queue and places it onto the function execution stack whenever the function stack becomes empty
 myArray = [2, 3, 4];
myArray.unshift(1); // Adds 1 to the beginning of the array
console.log(myArray); // Output: [1, 2, 3, 4]

let myArray = [1, 2, 3];
myArray.push(4); // Adds 4 to the end of the array
console.log(myArray); // Output: [1, 2, 3, 4]

//Q2
//1-The Output Is : 3
//2-
//3-The Output Is : baz
//4-
//5-The Output Is : true
//[ [ 'carName', 'Bmw' ], [ 'carPrice', 1000000 ] ]

//Q3
//1-
function sumObjectValues(obj) {
  let sum = 0;
  for (let key in obj) {
    if (obj.hasOwnProperty(key) && typeof obj[key] === 'number') {
      sum += obj[key];
    }
  }
  return sum;
}

//2-
//3-
getMaxValueWithIndex(numbers) {
  if (!Array.isArray(numbers) || numbers.length === 0) {
    return null;
  }

  let max = numbers[0];
  let maxIndex = 0;

  for (let i = 1; i < 6; i++) {
    if (numbers[i] > max) {
      max = numbers[i];
      maxIndex = i;
    }