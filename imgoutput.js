const input_box = document.getElementById("input_file")
const input_box_second = document.getElementById("input_file_second")
const input_box_third = document.getElementById("input_file_third")
const input_box_forth = document.getElementById("input_file_forth")
const input_box_fifth = document.getElementById("input_file_fifth")
const drop_area = document.getElementById("drop_box")
const drop_area_second = document.getElementById("drop_box_second")
const drop_area_third = document.getElementById("drop_box_third")
const drop_area_forth = document.getElementById("drop_box_forth")
const drop_area_fifth = document.getElementById("drop_box_fifth")
input_box.addEventListener("change", uploadImage)
function uploadImage(){
    let img_link = URL.createObjectURL(input_box.files[0])
    drop_area.style.backgroundImage = `url(${img_link})`
    drop_area.textContent = ""
}
drop_area.addEventListener("dragover", function(e){
    e.preventDefault();
})
drop_area.addEventListener("drop", function(e){
    e.preventDefault();
    input_box.files = e.dataTransfer.files;
    uploadImage()
})
function upload(){
    input_box.click()
}
input_box_second.addEventListener("change", uploadImageSecond)
function uploadImageSecond(){
    let img_link = URL.createObjectURL(input_box_second.files[0])
    drop_area_second.style.backgroundImage = `url(${img_link})`
    drop_area_second.textContent = ""
}
drop_area_second.addEventListener("dragover", function(e){
    e.preventDefault();
})
drop_area_second.addEventListener("drop", function(e){
    e.preventDefault();
    input_box_second.files = e.dataTransfer.files;
    uploadImageSecond()
})
function uploadSecond(){
    input_box_second.click()
}
input_box_third.addEventListener("change", uploadImageThird)
function uploadImageThird(){
    let img_link = URL.createObjectURL(input_box_third.files[0])
    drop_area_third.style.backgroundImage = `url(${img_link})`
    drop_area_third.textContent = ""
}
drop_area_third.addEventListener("dragover", function(e){
    e.preventDefault();
})
drop_area_third.addEventListener("drop", function(e){
    e.preventDefault();
    input_box_third.files = e.dataTransfer.files;
    uploadImageThird()
})
function uploadThird(){
    input_box_third.click()
}
input_box_forth.addEventListener("change", uploadImageForth)
function uploadImageForth(){
    let img_link = URL.createObjectURL(input_box_forth.files[0])
    drop_area_forth.style.backgroundImage = `url(${img_link})`
    drop_area_forth.textContent = ""
}
drop_area_forth.addEventListener("dragover", function(e){
    e.preventDefault();
})
drop_area_forth.addEventListener("drop", function(e){
    e.preventDefault();
    input_box_forth.files = e.dataTransfer.files;
    uploadImageForth()
})
function uploadForth(){
    input_box_forth.click()
}
input_box_fifth.addEventListener("change", uploadImageFifth)
function uploadImageFifth(){
    let img_link = URL.createObjectURL(input_box_fifth.files[0])
    drop_area_fifth.style.backgroundImage = `url(${img_link})`
    drop_area_fifth.textContent = ""
}
drop_area_fifth.addEventListener("dragover", function(e){
    e.preventDefault();
})
drop_area_fifth.addEventListener("drop", function(e){
    e.preventDefault();
    input_box_fifth.files = e.dataTransfer.files;
    uploadImageFifth()
})
function uploadFifth(){
    input_box_fifth.click()
}
function getDominantColor(imageObject, ctx) {
    ctx.drawImage(imageObject, 0, 0, 1, 1);
    const i = ctx.getImageData(0, 0, 1, 1).data;
    return "#" + ((1 << 24) + (i[0] << 16) + (i[1] << 8) + i[2]).toString(16).slice(1);
  }
//   function dominantColor() {
    // const canvas = document.getElementById("canvas"),
        //   preview = document.getElementById("preview"),
        //   ctx = canvas.getContext("2d");
//   
    // canvas.width = 1
    // canvas.height = 1
    // preview.width = 400
    // preview.height = 400
    // const input = document.getElementById("CarImageFile");
    // input.type = "file"
    // input.accept = "image/*"
    // input.onchange = event => {
    //   const file = event.target.files[0]
    //   const reader = new FileReader()
    //   const fileDataURL = file => new Promise((resolve,reject) => {
        // let fr = new FileReader();
        // fr.onload = () => resolve( fr.result);
        // fr.onerror = reject;
        // fr.readAsDataURL( file)
    // });
    //   reader.onload = readerEvent => {
        // const image = new Image()
        // image.onload = function() {
        //   fileDataURL( file)
        //   .then(function(data) {
            // document.getElementById("mainCut").src = data;
            // localStorage.setItem("cutImg", data);
        //   })
        //   .catch(err => console.log(err));
        //   var dominantColorNow = getDominantColor(image, ctx);
        //   localStorage.setItem("cutColor", dominantColorNow);
        //   var styleText = `
            // #CarBox:before {
            //   background-color: `+dominantColorNow+`
            // }
        //   `;
        //   var styleElement = document.createElement("style");
        //   styleElement.innerText = styleText;
        //   document.head.appendChild(styleElement);
        // }
        // image.src = readerEvent.target.result;
    //   }
    //   reader.readAsDataURL(file, "UTF-8");
    // }
    // if(localStorage.getItem("cutImg")) {
    //   document.getElementById("mainCut").src = localStorage.getItem("cutImg");
    // }
    // if(localStorage.getItem("cutColor")) {
    //   var dominantColorNow = localStorage.getItem("cutColor");
    //   var styleText = `
        // #CarBox:before {
        //   background-color: `+dominantColorNow+`
        // }
    //   `;
    //   var styleElement = document.createElement("style");
    //   styleElement.innerText = styleText;
    //   document.head.appendChild(styleElement);
    // }
//   }
//   dominantColor();