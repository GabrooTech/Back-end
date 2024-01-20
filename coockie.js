var accept_coockie = document.querySelector(".accept_coockie");
var coockie = document.querySelector(".coockie_alert")
function acceptCoockie(){
    coockie.remove();
    localStorage.setItem("coockies_state", "accepted")
}
if(localStorage.coockies_state == "accepted"){
    coockie.remove();
    console.log("sds")
}else{
    localStorage.setItem("coockies_state", "unkhnow")
}
