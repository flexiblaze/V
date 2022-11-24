
// objects have properties
// laptop is object and have lots of properties




// every programmer have name, technology, experience this is how u define properties

// key ==> value thats why we dont use "==" it is a key and value



// object literal


let input = 'name'

let alien = {
    name: 'Ömer',
    tec: 'HTML',
    work_exp: 4,   // 'work exp: 4'

}
console.log(alien['name']);   // same
console.log(alien.work_exp);     // same


// video #20 
// 

let students = {
    name: 'Ömer',
    tech: 'JS',
    laptop: {
        cpu: 'i7',
        ram: 4,
        brand: 'Asus' 
    }
}

delete students.name 

console.log(students);

console.log(students.laptop.brand?.length)


// for in loop  !!!! important  with for in loop u can get objects

for(let key in students.laptop){
    console.log(key,students.laptop[key]);
}



