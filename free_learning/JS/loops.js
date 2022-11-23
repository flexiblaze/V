let i = 1;

for(let i=1;i <=5;i++) {

console.log("Hi", i);

for(let j =1; j<=5; j++)
    console.log("Hello", j);
   
}

// For Loop ==> when you know the starting point and ending point u will always go 

//for(let i =1; i<=100;i++){

//    if(i%3==0){
//        console.log(i);
//    }
//}


//while (num>0) {

//    console.log(num%10);
//    num = parseInt(num / 10)
//}

let num = 123456;
let num2="0";

while(num>0)
{ 
    let remainder=num%10;
    num2=num2*10+remainder;
    num=parseInt(num/10);
    
}
console.log(num2);










