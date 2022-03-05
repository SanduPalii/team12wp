function zoomOn(src) {
    var zoom = document.getElementsByClassName('zoom');
    var img = document.getElementById('src_image');
    img.src = src;
    for (var i = 0; i < zoom.length; ++i) {
        zoom[i].classList.add("zoom-active");

    }
}

function zoomOff() {
    var zoom = document.getElementsByClassName('zoom');
    for (var i = 0; i < zoom.length; ++i) {
        zoom[i].classList.remove("zoom-active");
    }
}