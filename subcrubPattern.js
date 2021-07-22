class Shop{
  
  subscrubers=[];
  state = null;
  
  subscrube(event,notificationMethod){
    let newSubscruber = [event,notificationMethod];
    this.subscrubers.push(newSubscruber);
  }
  notifySubscrube(event){
    this.subscrubers.forEach(function(subscruberArr){
      if(subscruberArr[0] === event){
        subscruberArr[1]();
      }
    });
  }
  baseLogic(){
    if(this.state === "phones came"){
      this.notifySubscrube("get new phone");
    }else if(this.state === "computers came"){
      this.notifySubscrube("get new computer");
    }
  }

}

class User{
  phoneMassage(){
    console.log("New phone!");
  }
  computerMessage(){
    console.log("New computer!");
  }
  
}

let shop = new Shop();
let user = new User();
shop.subscrube("get new phone",user.phoneMassage);
shop.subscrube("get new computer",user.computerMessage);

shop.state = "phones came";
shop.baseLogic();
shop.state = "computers came";
shop.baseLogic();