
// les 1

let num = 2 + 2;
console.log(num)

num = 9
console.log(num)

let userName = "Ömer's Account";
console.log(userName)

// les 2

let radius = 5;
const pi = 3.14;
let area = 0;

area = pi * (radius**2)

console.log(area)

// les 3 

let data = 8;       // number
let user = "Ömer";  // String
let float = 4.5;     // float

let num1 = 0xff  //255 from html hex colour
let num2 = 1.5e12  // exponential
let num3 = 100_000_0000 // make variavles readeable with _
let num4 = 5/0         // u get infinity
let num5 = -5/0     // u get negatieve infinity
let num6 = 101010010101010101010101010n // this is big number u have to add "n" to not losing any data, if u try to add number u will get a error

// (Number.MAX_VALUE)  // method to get max value for number, if you multipy this number with something it will be infinity

console.log(num6 + 5n);   // but hier it will work good


// les 4

let firstName = "Ömer"
let lastName = ' "Warmtea"'  // "Navin Reddy \"Telusko\"" escape karakter   | \t = tab  \n= new line |  \v = verticaal 
let fullName = firstName + lastName;

console.log(fullName)

// null is a object  

let bool = 5 > 6
console.log(bool);

let ömer
console.log(typeof ömer)

let sayi = 5
console.log(typeof (5 / "Navin"))    // Non type of number


// les 5

let sayicim = String(6);
let sayicim2= Number("123");  // explicit conversion one data format to another data format

let sayicim3 

console.log(sayicim , typeof sayicim); // we are printing sayicim and the data type of sayicim

console.log(sayicim3, typeof sayicim3); // undefined
sayicim3 = 8;

console.log(sayicim3, typeof sayicim3); // 8 and number

sayicim3 = sayicim3 + ""  // coercion comes in the place
console.log(sayicim3, typeof sayicim3);

sayicim3 = sayicim3 - 2
console.log(sayicim3, typeof sayicim3);

sayicim3 = !sayicim3
console.log(sayicim3, typeof sayicim3);

console.log(Boolean(7))  // every nummber u will be getting "true" value except for 0 (zero) 
                        // Truthy all numbers
                        // Falsy zero (0)

console.log(Boolean(null))   // false, 0, -0, 0n, "", null, undefined, NaN, document.all  it is falsy value   

console.log(Boolean("Hanife"))  // number + string =  string
                                // number - string = number   js smart enough to what it needs to done 

                                
let x 
x = 8   
console.log(x, typeof x)
x= x + ""
console.log(x, typeof x)
x = +x + 2                      // if you add artifical signs such as + u will get 10 otherwise it is 82 string     
console.log(x, typeof x)


let y = parseInt ("123 Ömer")  // parseInt will try to do hard work and to get the number
console.log(y)


// les 6

let nummer1 = false
let nummer2 = true

let result = nummer1 + nummer2
console.log(result)             // true is one
                                // false is zero
                                     // concatenation

let nummer3 = 4

//num = num + 2   // this is expression = whereever u have something which will be getting to resolved to a value it is expression
//num += 2
//num -= 2
//num++  post increment   
//num--  post decrement
//++num  pre increment
//--num  pre decrement
let nummer4 = nummer3++   // post increment it will first fetch the value than it will assign the value
let nummer5 = ++nummer3                       // pre increment we are first incrementing it making the value and then assiging to variable
console.log(nummer4 , nummer5)

let nummer6 = 4
let result3 =Math.pow(4,3)  // 4**3  //nummer6 * nummer6 * nummer6
console.log(result3)


//les 7
// we u are comparing u will get boolean
// we can compare 2 strings  ASCII values the machine will look for alfabet and if pen and pencil= pencil is bigger
let data1 = ''
let data2 = false

let data3 = data1 == data2  // === ABSULLUT SAME

console.log(data3); 


// IF DEBUGGING IS REMOVING BUGS THEN CODING IS ADDING BUGS
// EVERYTIME U WRITE A CODE U MAYBE WRITE A BUGS IN YOUR CODS

//les 8

// And &
// OR ||
// Not !

let  f =  7, g = 2, t =5

let result5 = f< y || f < t

let resullt6 = !result5

console.log(result5)


// les 9
// if else
 let six = 6
 let four = 4
 let seven = 7



 if(six > four && six > seven){
     console.log("num1 is greater")
 }else if(four > six && four > seven){
     console.log("num 2 is greater");
     console.log('Ö');
 }else{
      console.log("tested last opinion");
 }

 console.log("omer");

 // assigement
 function oddEven(num) {
     if(num % 2 === 0) {
       num = 'even';
     }else {
       num = 'odd';
     }
     return num;
   }

   console.log(oddEven(4));

// les 8

let s = 4
let result8 

result8 = s%2===0 ? "even" :  "Odd"

if (s %2===0 ) {
     console.log("even number");
}else{
     console.log("Odd number");
}

// les 9

// mon - 7am   
// tue thurs 4 am
// fri 9 am
// sat sun - 8 am

let day = "Thursday";
        if (day === "Monday") {
          console.log("7 am");
        } else if (day === "Tuesday" || "Wednesday" || "Thursday") {
          console.log("4 am");
        } else if (day === "Friday") {
          console.log("9am");
        } else {
          console.log("8 am");
        }

let dag = "Holiday"

// default and break are important

switch(dag){
     case 'Monday':
     console.log("7 am");
     break;
     case 'Tuesday':
     case 'Wednesday':
     case 'Thursday':
     console.log("4 am");
     break;
     case 'Friday':
     console.log("9 am");
     break;
     case 'Saturday':
     case 'Sunday':
     console.log("8 am");
     break;
     default: 
     console.log("Ömer");
}    

// go video 15