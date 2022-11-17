

function myfunc(x,y){
    return(x+y);
    
}

console.log(myfunc(2,myfunc(5,-2)));


const myArray = [1, 2, 3, 4]
myArray.forEach( (item, index) => {
    myArray[index] = ++item;
});


var sqrt = (function(x) {
    console.log(x*x);
   })(my_number)
  
   my_number = 5;



   const myFunction = (data, modifier) => {
    if (data >= 3) {
       return;
    } else {
       console.log(data + modifier);
    }
 }


 const number = 10;
 if (number <= 9) {
    console.log("<=9");
 } else if ( number >= 10 ){
    console.log(">=10");
 }


 const myFunction1 = (data) => {
    console.log(data);
 };



 const myFunction2 = (data) => {
    return;
    let newData = data + 1;
    return newData;
 }
 
 console.log(myFunction2(5));