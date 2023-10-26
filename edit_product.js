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