
//functions you need to call it again and again so thats why


function greet(user) {   // once u passing u need to accept the params

    return `Hello ${user}`
}


let user = "Ömer";

let str = greet(user);  // u r calling a function using with params

console.log(str);


// when a return statement is used in a function body the execution of the function is stopped
// functions are object type

// function expression   |  expression ===> evaluate ===> assigned

function toplam(num1,num2){

    return num1 + num2;
}

console.log(toplam(3,5));

// function 2
function add(num1,num2, num3){

    return num1 + num2+ num3;
}

let result = add(5,6,6); // defualt value is only avaible until real value
console.log(result);


// hoisting


// let greet = (user) =>{
    
//     console.log("Hello "+ user);
//     return 1;
// }

// console.log(greet('Ömer'));


let topluyorum =(num3, num4) =>  num3 + num4;


 let omercimm = topluyorum(5,6);

 console.log(omercimm);


 

 let input1 = Math.abs(5);
 let input2 = Math.abs(-7);
 
 let sum = (num1,num2) => num1 + num2;
 let result4 = sum(input1,input2);
 console.log(result4);




















