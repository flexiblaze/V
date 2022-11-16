/**
 * Working with array methods
 * @link https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array#Instance_methods
 */

let backpackContents = ["piggy", "headlamp", "pen"];


//backpackContents.push("pencil",5); // add to the end
//backpackContents.unshift("ali", 21); // add to begin

//backpackContents.shift(); // delete first item in array
//backpackContents.pop(); // delete the last item in array

//console.log(backpackContents.join(" |"));    // output all items in  the arrays as string we can also add something in between like comma

// backpackContents.forEach(function (item) {
 //  item = `<li>${item}</li>`;
 //  console.log(item);
// });

 let longItems = backpackContents.find(function (item) {
   if (item.length >= 5) {
     return item;
   }
 });
 console.log("longItems:", longItems);

console.log(backpackContents);




