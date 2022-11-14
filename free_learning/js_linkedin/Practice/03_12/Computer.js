/**
 * Creating classes:
 *
 * Class declaration: class Name {}
 * Class expression:  const Name = class {}
 */

class Computer{
  constructor(
    name,
    model,
    cost,
  ){
    this.name = name;
    this.model= model;
    this.cost= cost;
  }
}
  
export default Computer;