var form = document.querySelector("#main_parent_add_content_element");
var inputSubject = document.querySelector(".brif_description_input");
var inputContent = document.querySelector(".brif_dsscription_non_content_input")
var submitbutton = document.querySelector(".content_add_button")
var final_brif_description_form = document.querySelector(".summed_brif_infromation")
var final_brif_description_form_desc = document.querySelector(".summed_brif_infromation_desc")
function changeBrifValue(){
    var x = document.querySelector(".brif_description_input");
    x.value = x.value;
    // console.log(x.value);
    final_brif_description_form += x.value
    final_brif_description_form += "+"
    // console.log(final_brif_description_form)
}
function changeBrifDescValue(){
    var y = document.querySelector(".brif_dsscription_non_content_input");
    y.value = y.value;
    // console.log(y.value);
    final_brif_description_form_desc += y.value
    final_brif_description_form_desc += "+"
    // console.log(final_brif_description_form_desc)
}
function testsubject(){
    var task = inputSubject.value;
    var second_task = inputContent.value
    var task_el = document.createElement('div');
    task_el.classList.add('brif_description_add_product_var_inner_grid');
    var task_content_el = document.createElement('div');
    task_content_el.classList.add('brif_description_content_box');
    task_el.appendChild(task_content_el);
    var task_input_el = document.createElement('input');
    task_input_el.classList.add('brif_description_input');
    task_input_el.classList.add('task_integrator_fixer')
    task_content_el.appendChild(task_input_el);
    task_input_el.value = task;
    task_input_el.name = 'subject'
    var description_task = document.createElement('div');
    description_task.classList.add('brif_description_reason_box');
    description_task.classList.add('task_description_integrator_fixer')
    var description_task_input = document.createElement('input');
    description_task_input.classList.add('brif_dsscription_non_content_input')
    description_task_input.classList.add('brif_description_input')
    task_input_el.onchange = changeBrifDescValue();
    description_task_input.onchange = changeBrifValue();
    description_task_input.value = second_task;
    description_task_input.name = 'subject_description'
    description_task.appendChild(description_task_input)
    task_el.appendChild(description_task);
    task_input_el.setAttribute('readonly', 'readonly');
    description_task_input.setAttribute('readonly', 'readonly');
    var task_actions_el = document.createElement('div');
    task_actions_el.classList.add('command_on_brif_desc')
    var task_edit_el = document.createElement('div');
    task_edit_el.classList.add('edit');
    task_edit_el.innerText = 'Edit';
    var task_delete_el = document.createElement('div');
    task_delete_el.classList.add('delete');
    task_delete_el.innerText = 'Delete';
    task_actions_el.appendChild(task_edit_el);
    task_actions_el.appendChild(task_delete_el);
    task_el.appendChild(task_actions_el);
    form.appendChild(task_el);
    inputSubject.value = ""
    inputContent.value = ""
    task_edit_el.addEventListener('click', () => {
        if (task_edit_el.innerText.toLowerCase() == "edit") {
            task_edit_el.innerText = "Verify";
            task_input_el.removeAttribute("readonly");
            task_input_el.focus();
            description_task_input.removeAttribute("readonly");
            description_task_input.focus();
            console.log(final_brif_description_form)
            // final_brif_description_form -= task_input_el.value;
            // final_brif_description_form_desc -= description_task_input.value;
        }else if(task_edit_el.innerText.toLowerCase() == "verify"){
            task_edit_el.innerText = "Save";
            task_input_el.removeAttribute("readonly");
            task_input_el.focus();
            description_task_input.removeAttribute("readonly");
            description_task_input.focus();
            final_brif_description_form += task_input_el.value;
            final_brif_description_form += " "
            final_brif_description_form_desc += description_task_input.value;
            final_brif_description_form_desc += " "
        }else if(task_edit_el.innerText.toLowerCase() == "save"){
            task_edit_el.innerText = "Edit";
            task_input_el.setAttribute("readonly", "readonly");
            description_task_input.setAttribute("readonly", "readonly");
        }
});
task_delete_el.addEventListener('click', () => {
    form.removeChild(task_el);
});
// var brif_desc_output = document.getElementById("summed_brif_infromation_id").innerHTML = final_brif_description_form;
// var brif_desc_output = document.getElementById("summed_brif_infromation_id").value = final_brif_description_form;
// var styleElementBrifDesc = document.createElement("style");
// var brif_desc_output_desc = document.getElementById("summed_brif_infromation_desc_id").innerHTML = final_brif_description_form_desc;
// var brif_desc_output_desc = document.getElementById("summed_brif_infromation_desc_id").value = final_brif_description_form_desc;
// var styleElementBrifDescD = document.createElement("style");
// styleElementBrifDescD.val.innerText = brif_desc_output_desc;
}
function addSomething(){
    submitbutton.addEventListener('click', testsubject())
}
