if (document.getElementById('slider')) {
    new Slider();
    new Forecast();
    new FormContact();

} else if (document.getElementById('formConnection')) {
    new FormConnection();
} else if (document.getElementById('formAddComment')) {
    new FormAddComment();
} else if (document.getElementsByClassName('formContact')) {
    new FormContact();
}
