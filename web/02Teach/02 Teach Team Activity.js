function click() {
    alert("Clicked");
}

function changeColor() {
    var color;
    color = document.getElementById("colorText").value;
    document.getElementById("first").style.color = color;
}