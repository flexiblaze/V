/**
 * Challenge: Build and modify an array
 * - Build an array with 8 items
 * - Remove the last item
 * - Add the last item as the first item on the array 
 * - Sort the items by alphabetical order
 * - Use the find() method to find a specific item in the array
 * - Remove the item you found using the find method from the array.
 */


let array = [
    6,7,"omer","ali",
    "bril","telefoon","hala", 81];


 // if u use capital case it is gonna to be first item in the array

console.log(array.pop); // u get last item in the array

array.pop(); // it deletes the last item in the arrays

 //first to the last
//array.push(array.shift())

// last to the first
array.unshift(array.pop());

// order alfabetically
console.log(array.sort());

// find specific item

const founditem = array.find(item => item === "cat");
console.log(founditem);

// find and remove a item

let remove = "ali"
array.splice(array.indexOf(remove), 1)   // first one is index number of what are we lookin for, and second one is number of how many we want to delete
// we can also add third option to add something instead ali
console.log(array);