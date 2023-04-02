


function vypis(id){
    let element = document.getElementById(id).value;
    let el = "<p>"+element+"</p>";
    document.getElementById("neco").appendChild(el);
    console.log(element);
}