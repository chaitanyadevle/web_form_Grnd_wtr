var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      var msg= "Geolocation is not supported by this browser.";
      alert(msg);
    }
}
function showPosition(position) {
	console.log(position);
    var latitude=position.coords.latitude;
    var longitude=position.coords.longitude;
    $("#latitude").val(latitude);
    $("#longitude").val(longitude);
}

function loaded(){
	getLocation();
}

window.onload=loaded;