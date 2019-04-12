var elementsArray = document.getElementsByTagName("h1");
var element = elementsArray[0];

var buttonElement = document.getElementById("title-button");

function changeStyle() {
  if(element.style.color === "black") {
     element.style.color = "yellow";
     element.classList.add("bordered-text");
  } else {
     element.style.color = "black";
     element.classList.remove("bordered-text");

  }
}

//buttonElement.addEventListener("click", function(){
//    
//    if (element.style.color === "black") {
//        
//        element.style.color = "yellow";
//        element.classList.add("bordered-text");
//        
//  } else if (element.style.color === "yellow"){
//      
//        element.style.color = "black";
//  }
//
//});
