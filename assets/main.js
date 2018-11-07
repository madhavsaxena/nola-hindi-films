var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var fcheck = JSON.parse(this.responseText);
        document.getElementById("answer").innerHTML = fcheck.status;
    }
};
xmlhttp.open("GET", "https://hindifilmsnola.com/json/filmstatus.json", true);
xmlhttp.send();

navigator.serviceWorker && navigator.serviceWorker.register('./sw.js').then(function(registration) {
  console.log('Excellent, registered with scope: ', registration.scope);
});