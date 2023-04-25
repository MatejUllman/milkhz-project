function vypis(id) {
    let element = document.getElementById(id).value;
    let el = "<p class='popis' style='padding-left:20px;'>" + element + '</p>';
    document.getElementById('neco').innerHTML = el;
}
