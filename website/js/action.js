//import data to the edit modal
function edit(id,name,email,pass,classe){

document.querySelector('#modal2').style.visibility='visible'

document.querySelector('#id_edited').value = id ;
document.querySelector('#name_edited').value = name ;
document.querySelector('#email_edited').value = email ;
document.querySelector('#pass_edited').value = pass ;
document.querySelector('#class_edited').value = classe;
// console.log(id,name,email,pass,classe);
}

//control modal visibility *Start*
var modal1 = document.getElementById('modal1');
var modal2 = document.getElementById('modal2');
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.visibility = "hidden";
    }
    if (event.target == modal2) {
        modal2.style.visibility = "hidden";
    }
}
// *End*

