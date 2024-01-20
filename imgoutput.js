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
const main_img_icon = document.querySelector(".upload_img_add_product")
const main_img_text = document.querySelector(".upload_img_add_product_text")
const second_main_img_icon = document.querySelector(".second_upload_img_add_product")
const second_main_img_text = document.querySelector(".second_upload_img_add_product_text")
const third_main_img_icon = document.querySelector(".third_upload_img_add_product")
const third_main_img_text = document.querySelector(".third_upload_img_add_product_text")
const forth_main_img_icon = document.querySelector(".forth_upload_img_add_product")
const forth_main_img_text = document.querySelector(".forth_upload_img_add_product_text")
const fifth_main_img_icon = document.querySelector(".fifth_upload_img_add_product")
const fifth_main_img_text = document.querySelector(".fifth_upload_img_add_product_text")
const second_img_error = document.querySelector(".second_img_error")
const third_img_error = document.querySelector(".third_img_error")
const forth_img_error = document.querySelector(".forth_img_error")
const fifth_img_error = document.querySelector(".fifth_img_error")
input_box.addEventListener("change", uploadImage)
function uploadImage(){
    let img_link = URL.createObjectURL(input_box.files[0])
    drop_area.style.backgroundImage = `url(${img_link})`
    drop_area.value = `url(${img_link})`
    drop_area.textContent = ""
    main_img_icon.remove()
    main_img_text.remove()
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
    drop_area_second.value = `url(${img_link})`
    drop_area_second.textContent = ""
    second_main_img_icon.remove()
    second_main_img_text.remove()
    second_img_error.remove()
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
    drop_area_third.value = `url(${img_link})`
    drop_area_third.textContent = ""
    third_main_img_icon.remove()
    third_main_img_text.remove()
    third_img_error.remove()
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
    drop_area_forth.value = `url(${img_link})`
    drop_area_forth.textContent = ""
    forth_main_img_icon.remove()
    forth_main_img_text.remove()
    forth_img_error.remove()
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
    drop_area_fifth.value = `url(${img_link})`
    drop_area_fifth.textContent = ""
    fifth_main_img_icon.remove()
    fifth_main_img_text.remove()
    fifth_img_error.remove()
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
if(drop_area.value != ''){
    main_img_icon.remove()
    main_img_text.remove()
    // if(input_box.files[0] == ''){
    //     input_box.files[0] = drop_area.value
    // }
}
if(drop_area_second.value !=  ''){
    second_main_img_icon.remove()
    second_main_img_text.remove()
}
if(drop_area_third.value != ''){
    third_main_img_icon.remove()
    third_main_img_text.remove()
}
if(drop_area_forth.value != ''){
    forth_main_img_icon.remove()
    forth_main_img_text.remove()
}
if(drop_area_fifth.value != ''){
    fifth_main_img_icon.remove()
    fifth_main_img_text.remove()
}
// console.log(second_img_error)