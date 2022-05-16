let hiddenInput = document.getElementById('hInput');
let btnDisplay = document.getElementById('showHideBtn');

btnDisplay.onmousedown = function () {
    hiddenInput.type = "text";
    btnDisplay.innerHTML = "Relâcher pour cacher";
}

btnDisplay.onmouseup = function () {
    hiddenInput.type = "password";
    btnDisplay.innerHTML = "Maintenir pour montrer";
}

