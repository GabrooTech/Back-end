let filterBox = document.querySelector(".main_filter_box");
let filterSpdr = document.querySelector(".filter_slider");
let upArrow = document.querySelector(".down_arrow")
filterSpdr.onclick = function() {
    filterBox.classList.toggle("main_filter_box_active")
    filterSpdr.classList.toggle("filter_slider_active")
    upArrow.classList.toggle("bxs-up-arrow")
}