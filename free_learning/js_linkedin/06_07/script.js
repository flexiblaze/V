/**
 * Assignment vs comparison
 * @link https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators#Relational_operators
 */

let a = 5;
let b = "5";  // they look like 5 thats why it is true but if its string "five" then its false


console.log(`let a: ${a} (${typeof a})`);
console.log(`let b: ${b} (${typeof b})`);

// == equal to
// === absuloot same it should also number number , string string
// > larger then
// < smaller then
// >= either bigger either same value
// <= either smaller either same value
// != if not  , testing false
// !== if absoluut not , testing false
 

if (a == b) {
  console.log(`Match! let a and let b are the same value.`);
} else {
  console.error(`No match: let a and let b are NOT same value.`);
}
