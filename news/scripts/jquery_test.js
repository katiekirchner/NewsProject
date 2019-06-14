$("#title2").css("color", "yellow");

$("#title2-button").click(function(){
    if(title2.style.color === "black") {
     title2.style.color = "yellow";
  } else {
     title2.style.color = "black";
  }
});

$("#hour-pic").css("postion", "relative");

$("#pic-button").click(function(){
    $("#hour-pic").animate({left: '500px'});
});
