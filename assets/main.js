var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var fcheck = JSON.parse(this.responseText);
        document.getElementById("answer").innerHTML = fcheck.status;
    }
};
xmlhttp.open("GET", "http://hindifilmsnola.com/filmstatus.json", true);
xmlhttp.send();