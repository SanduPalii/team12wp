var btn = document.getElementsByClassName('descr_btn');
var catalog = document.getElementsByClassName('catalog_image');
var card = document.getElementsByClassName('card_btn');

function changeColor(colorValue) {

    for (let i = 0; i < btn.length; ++i) {
        btn[i].style.background = document.getElementById(colorValue).dataset.color;
    }

    for (let i = 0; i < card.length; ++i) {
        card[i].style.background = document.getElementById(colorValue).dataset.color;
    }

    for (let i = 0; i < catalog.length; ++i) {
        catalog[i].style.background = document.getElementById(colorValue).dataset.color;
    }

}