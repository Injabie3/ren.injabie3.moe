function getAWSRenUptime() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("renuptime").innerText = this.responseText;
    }
  };
  xhttp.open("GET", "/uptime/ren.php", true);
  xhttp.send();
}
function getAWSAyumiUptime() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("ayumiuptime").innerText = this.responseText;
    }
  };
  xhttp.open("GET", "/uptime/ayumi.php", true);
  xhttp.send();
}