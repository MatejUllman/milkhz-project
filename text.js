


function vypis(id){
    let element = document.getElementById(id).value;
    let el = "<p class='popis'>"+element+"</p>";
    document.getElementById("neco").innerHTML = el;
    
}