class Forecast {
    constructor() {
        this.url = "https://api.openweathermap.org/data/2.5/weather?&lang=fr&units=metric&appid=7424467761a19cc2015304b9e49b5fad&q=";
        this.cityDefault = "montauban";
        
        this.eventListener();
        this.verification();
    }

    eventListener() {
        document.getElementById("button").addEventListener('click', () => this.verification());
    }

    verification() {
        this.city = document.getElementById("cityValue").value;
        if (this.city === "") {
            this.city = this.cityDefault;
        }

        this.urlCity = this.url + this.city;
        this.requete();
    }

    requete() {
        let self = this;
            // Requête XMLHttp JSON
            let requete = new XMLHttpRequest(); 
            requete.open('GET', this.urlCity); 
            requete.send();
            requete.onload = function(e) {
                if (requete.readyState === XMLHttpRequest.DONE) {
                    if (requete.status === 200) {
                        this.reponse = requete.responseText;
                        let object = JSON.parse(this.responseText);

                        document.getElementById("nameCity").textContent = 'Ville de ' + object.name + '.' ;
                        document.getElementById("description").textContent = 'Description : ' + object.weather[0].description + '.' ;
                        document.getElementById("temperature").textContent = 'Température : ' + Math.round(object.main.temp) + '°C.' ;
                        document.getElementById("temperatureMax").textContent = 'Température-maxi : ' + Math.round(object.main.temp_max) + '°C.' ;
                        document.getElementById("temperatureMin").textContent = 'Température-mini : ' + Math.round(object.main.temp_min) + '°C.' ;

                       
                        let image = object.weather[0].icon
                        this.icon = document.getElementById("icon").src = ('src', 'http://openweathermap.org/img/wn/'+ image + '.png');
                    } else if (requete.status === 404) { 
                        alert(" Veuillez vérifier l'ortographe' ou ville introuvable ");
                    }
                } else {
                    alert('Un problème est intervenu, merci de revenir plus tard.');
                }
            };
    }
}
