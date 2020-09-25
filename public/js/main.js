if (document.getElementById('slider')) {
    new Slider();
    new Forecast();
    new FormContact();

} else if (document.getElementsByClassName('formClass')) {
    new FormContact();
}
