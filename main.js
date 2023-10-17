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