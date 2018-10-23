var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var fcheck = JSON.parse(this.responseText);
        document.getElementById("answer").innerHTML = fcheck.status;
        document.getElementById("todaysdate").innerHTML = fcheck.status;
    }
};
xmlhttp.open("GET", "http://167.99.145.40/hindifilms/filmstatus.json", true);
xmlhttp.send();