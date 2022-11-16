/**
 * Working with arrays
 * @link https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/Arrays
 */


// arrays are extremely flex with data types

let item = "flashlight";

const collection = ["Piggy", item, 5, true];

collection[2] = "camera";
collection[collection.length] = "new item";
collection[9] = "at the end";

console.log(collection.length);
console.log(collection[1]);
console.log(collection[2]);

console.log(collection[8]); // undefined

