let num1= 7
let num2 = 4

let result = num1 + num2
                                     // template literal would also work
console.log(`The additon of ${num1} and ${num2} is ${result}`);  

// template literal would also work, use `` backticks
// we can get the value with concatenation

console.log(`My name 
is Ömer`);


// loops = while ,  do while , for

// DRY = DO NOT REPEAT YOURSELF

// repeat this statement 5 times
// loop= initialization, condition test, increment



// while loop ==> check for the conditions than execute the block 
let i = 1 // counter the variable name is "i" cuz it is increment and all developers use that

while (i <= 5) {
    console.log("Ömer",i);
    i--
}




// do while execute at least one time the block then check for the conditions
let i2 = 10;

do{

    console.log("Hi", i2);

}while (i2<=5)