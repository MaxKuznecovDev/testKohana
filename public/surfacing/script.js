let redElem = document.getElementsByClassName("red")[0];
let greenElem = document.getElementsByClassName("green")[0];
let blueElem = document.getElementsByClassName("blue")[0];
let offEmersion = document.getElementsByClassName("offEmersion")[0];
let onEmersion = document.getElementsByClassName("onEmersion")[0];

let redHandler = function(){
    console.log("red");
};
let redHandlerOffEmersion = function(){
    console.log("red");
    event.stopPropagation();
};
let greenHandler = function(event){
    console.dir("green");
    if(event.target.className === 'blue'){
        console.log("Double blue");
    }
    if(event.target.className === 'red'){
        console.log("Double red");
    }
};
let blueHandler = function(){
    console.log("blue");
};

redElem.addEventListener('click',redHandler);
greenElem.addEventListener('click',greenHandler);
blueElem.addEventListener('click',blueHandler);

offEmersion.addEventListener('click',()=>{
       redElem.removeEventListener('click',redHandler);
        redElem.addEventListener('click',redHandlerOffEmersion);
});
onEmersion.addEventListener('click',()=>{
  redElem.removeEventListener('click',redHandlerOffEmersion);
    redElem.addEventListener('click',redHandler);
    greenElem.addEventListener('click',greenHandler);
    blueElem.addEventListener('click',blueHandler);
});

