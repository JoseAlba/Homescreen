/**
 * Created by Jose on 2017-08-30.
 */

function myfunction(){
    var fieldset = document.getElementById("menu");
    var input = document.createElement("input");
    input.type = "text";
    fieldset.appendChild(input);
}



function addFields(){
    // Number of inputs to create
    var number = document.getElementById("member").value;
    // Container <div> where dynamic content will be placed
    var container = document.getElementById("container");
    // Clear previous contents of the container
    while (container.hasChildNodes()) {
        container.removeChild(container.lastChild);
    }
    for (i=0;i<number;i++){
        // Append a node with a random text
        container.appendChild(document.createTextNode("Member " + (i+1)));
        // Create an <input> element, set its type and name attributes
        var input = document.createElement("input");
        input.type = "text";
        input.name = "member" + i;
        input.setAttribute("")
        container.appendChild(input);
        // Append a line break
        container.appendChild(document.createElement("br"));
    }
}
var fieldset;
function createMenu(){
    var fieldset = document.createElement("fieldset");
    fieldset.id = "menu";
    var label = document.createElement("label");
    label.for = "name";
    label = "What is your name?";
    fieldset.appendChild(label);
    container.appendChild(fieldset);

}

function switchFrame(newDirectory){
    parent.document.getElementById("rightPanel").src = newDirectory;
}

