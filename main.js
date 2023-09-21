let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let spdr = document.querySelector("#spdr");
let sbd = document.querySelector("#sbd");
var x = window.matchMedia("(max-width: 1000px)")
function toogler(x){
  if(x.matches){
    btn.onclick = function() {
      sidebar.classList.toggle("active")
      spdr.classList.toggle("slider_active")
    }
    spdr.onclick = function() {
      sidebar.classList.toggle("active")
      spdr.classList.toggle("slider_active")
      console.log("clicked")
    }
  }
}
toogler(x)

// var k = 0;
// function move(){
//   var box = document.querySelector('.box')
//   var location = ["-257px","-607px","-963px","-1314px","-1668px","-2035px"]
//   box.style.translate = location[k];
//   if(k < 6){
//     k++
//   }else{
//     k = 0;
//   }
// }
// setInterval(move, 5000)
var box = document.querySelector(".box_sale");
var locator = ["0px","-280px","-630px","-985px","-1335px","-1685px","-2040px"]
var counter = 0;

function changer(){
  if(counter < 7){
    counter++;
    }else{
      counter = 0;
    }

    box.style.translate = locator[counter];

};
var myTimer = setInterval(changer, 5000)
// Stop the current timer when mouseover
box.addEventListener("mouseover", function(){ clearInterval(myTimer)});
// Start a new timer when mouse out
box.addEventListener("mouseout", function(){ myTimer = setInterval(changer, 5000);});

var trending_box = document.querySelector(".trending_box");
var locatorReverse = ["-2040px","-1685px","-1335px","-985px","-630px","-280px","0px"]
var counterReverse = 0;

function changerRevers(){
  if(counterReverse < 7){
    counterReverse++;
    }else{
      counterReverse = 0;
    }

    trending_box.style.translate = locatorReverse[counterReverse];
    console.log(counterReverse)
};
var myTimerReverse = setInterval(changerRevers, 5000)
// Stop the current timer when mouseover
trending_box.addEventListener("mouseover", function(){ clearInterval(myTimerReverse)});
// Start a new timer when mouse out
trending_box.addEventListener("mouseout", function(){ myTimerReverse = setInterval(changerRevers, 5000);});

