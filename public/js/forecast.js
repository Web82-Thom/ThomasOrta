class Forecast {
    constructor() {
        this.url = "https://api.openweathermap.org/data/2.5/weather?q="+ localStorage.getItem('Ville') +"&lang=fr&units=metric&appid=7424467761a19cc2015304b9e49b5fad";
        this.eventListener();
        this.initSetting();
    }

    eventListener() {
        localStorage.removeItem('Ville');
        document.getElementById("button").addEventListener('click', () => this.verification());
        
    }

    verification() {
        this.city = document.getElementById("cityValue").value;
        this.requete();
        if (this.city !== "") {
            localStorage.setItem("Ville", this.city);
        } else { 
            alert("Veuillez renseigner une ville");
        }
    }

    requete() {
        let self = this;
            // Requête XMLHttp JSON
            let requete = new XMLHttpRequest(); 
            requete.open('GET', this.url); 
            requete.send();
            requete.onload = function(e) {
                if (requete.readyState === XMLHttpRequest.DONE) {
                    if (requete.status === 200) {
                        this.reponse = requete.responseText;
                        let object = JSON.parse(this.responseText);

                        document.getElementById("nameCity").textContent = 'Ville de ' + object.name + '.' ;
                        document.getElementById("description").textContent = 'Description : ' + object.weather[0].description + '.' ;
                        document.getElementById("temperature").textContent = 'Température : ' + Math.round(object.main.temp) + '°C.' ;
                       
                        let image = object.weather[0].icon
                        this.icon = document.getElementById("icon").src = ('src', 'http://openweathermap.org/img/wn/'+ image + '.png');
                    } else if (requete.status === 404) { 
                        alert(" Veuillez vérifier l'ortographe' ou ville introuvable ");
                        sessionStorage.removeItem('Ville');
                    };
                } else {
                    alert('Un problème est intervenu, merci de revenir plus tard.');
                }
            };
    }

    initSetting () {
        window.addEventListener("DOMContentLoaded", () => {
            if (localStorage.getItem('Ville')) {
                localStorage.removeItem('Ville');
            }
        });
    }
}
