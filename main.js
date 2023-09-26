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
var realBox = document.querySelector(".box")
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
box.addEventListener("mouseover", function(){ clearInterval(myTimer)});
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
};
var myTimerReverse = setInterval(changerRevers, 5000)
trending_box.addEventListener("mouseover", function(){ clearInterval(myTimerReverse)});
trending_box.addEventListener("mouseout", function(){ myTimerReverse = setInterval(changerRevers, 5000);});
var brand = document.querySelector(".brand_box")
var brandlocator = ["0px","-250px","-600px","-865px","-1205px","-1455px"]
var brandCounter = 0;
function brandChanger(){
  if(brandCounter < 7){
    brandCounter++;
  }else{
    brandCounter = 0;
  }

  brand.style.translate = brandlocator[brandCounter]
};
var brandTimer = setInterval(brandChanger, 3000)
brand.addEventListener("mouseover", function(){ clearInterval(brandTimer)});
brand.addEventListener("mouseout", function(){ brandTimer = setInterval(brandChanger, 3000)})
var brandlocatorswitch = ["0px","-280px","-600px","-850px","-1200px","-1485px"]
var brandlocatorReverseSwitch = ["-1485px","-1200px","-850px","-600px","-280px","0px"]
var saleBackBtn = document.querySelector(".sale_back")
var saleNextBtn = document.querySelector(".sale_next")
var saleArrowBox = document.querySelector(".sale_view_list")
var arrowCounter = 0
saleNextBtn.addEventListener("click", () => {
  if(arrowCounter < 7){
    arrowCounter++;
  }else{
    arrowCounter = 0;
  }
  box.style.translate = locator[arrowCounter];
})
saleBackBtn.addEventListener("click", () => {
  if(arrowCounter < 7){
    arrowCounter++;
  }else{
    arrowCounter = 0;
  }
  box.style.translate = locatorReverse[arrowCounter];
})
saleArrowBox.addEventListener("mouseover", function(){ clearInterval(myTimer)});
saleArrowBox.addEventListener("mouseout", function(){ myTimer = setInterval(changer, 5000);});
var trendingBackBtn = document.querySelector(".trending_back")
var trendingNextBtn = document.querySelector(".trending_next")
var trendingArrowBox = document.querySelector(".trending_view_list")
var arrowCounterTrending = 0
trendingNextBtn.addEventListener("click", () => {
  if(arrowCounterTrending < 7){
    arrowCounterTrending++;
  }else{
    arrowCounterTrending = 0;
  }
  trending_box.style.translate = locator[arrowCounterTrending];
})
trendingBackBtn.addEventListener("click", () => {
  if(arrowCounterTrending < 7){
    arrowCounterTrending++;
  }else{
    arrowCounterTrending = 0;
  }
  trending_box.style.translate = locatorReverse[arrowCounterTrending];
})
trendingArrowBox.addEventListener("mouseover", function(){ clearInterval(myTimerReverse)});
trendingArrowBox.addEventListener("mouseout", function(){ myTimerReverse = setInterval(changerRevers, 5000);});
var brandBackBtn = document.querySelector(".brand_back")
var brandNextBtn = document.querySelector(".brand_next")
var brandArrowBox = document.querySelector(".brands_view_list")
var arrowCounterbrand = 0
brandNextBtn.addEventListener("click", () => {
  if(arrowCounterbrand < 7){
    arrowCounterbrand++;
  }else{
    arrowCounterbrand = 0;
  }
  brand.style.translate = brandlocatorswitch[arrowCounterbrand];
})
brandBackBtn.addEventListener("click", () => {
  if(arrowCounterbrand < 7){
    arrowCounterbrand++;
  }else{
    arrowCounterbrand = 0;
  }
  brand.style.translate = brandlocatorReverseSwitch[arrowCounterbrand];
})
brandArrowBox.addEventListener("mouseover", function(){ clearInterval(brandTimer)});
brandArrowBox.addEventListener("mouseout", function(){ brandTimer = setInterval(brandChanger, 5000);});