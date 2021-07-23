class Shop{
  startSail(subscruber){
    console.log("Hello "+ subscruber +"! Start sail New phone!" );
  }
  technicalSupport(subscruber){
    console.log("Hello "+ subscruber +"!We help you!");
  }

}

class EventChanel{
  subscrubers=[];
  events=[];

  subscrube(nameEvent,subscruber){
    let newSubscruber = [nameEvent,subscruber];
    this.subscrubers.push(newSubscruber);
  }
  addEvent(nameEvent,eventMethod){
    let newEvent = [nameEvent,eventMethod];
    this.events.push(newEvent);
  }
  notifySubscrube(event){
    let self = this;
    this.events.forEach(function(eventsArr){
      if(eventsArr[0] === event){
        self.subscrubers.forEach(function(subscruberArr){
          if(subscruberArr[0]=== event){
            eventsArr[1](subscruberArr[1]);
          }
        });
      }
    });
  }
}

class User{
  name = "Vasya";
}

let shop = new Shop();
let eventChanel = new EventChanel();
let user = new User();


eventChanel.addEvent("startSail",shop.startSail);
eventChanel.addEvent("technicalSupport",shop.technicalSupport);
eventChanel.subscrube("startSail",user.name);
eventChanel.subscrube("technicalSupport",user.name);

eventChanel.notifySubscrube("startSail");
eventChanel.notifySubscrube("technicalSupport");