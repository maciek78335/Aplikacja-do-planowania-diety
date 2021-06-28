function loadDoc(fileName) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("container").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", fileName, true);
    xhttp.send();
}

function showHidden(obj) {
    obj = document.getElementById(obj);
    obj.style.display == 'none' ? obj.style.display = '' : obj.style.display = 'none';
}