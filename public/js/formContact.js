class FormContact {
    constructor() {
        this.eventListenerMethod();

        document.getElementById('inputContactName').value = localStorage.getItem('name');
        document.getElementById('inputContactFirstName').value = localStorage.getItem('firstName');
        document.getElementById('inputContactEmail').value = localStorage.getItem('email');
        document.getElementById('inputContactMessage').value = localStorage.getItem('message');
        document.getElementById('inputContactCheck').value = localStorage.getItem('check');
    }

    eventListenerMethod() {
        document.getElementById('formButton').addEventListener('click' , () => this.verification());
    }

    verification() {
        let name = document.getElementById('inputContactName').value;
        let firstName = document.getElementById('inputContactFirstName').value;
        let email = document.getElementById('inputContactEmail').value;
        let title = document.getElementById('inputContactTitle').value;
        let message = document.getElementById('inputContactMessage').value;
        let checked =  document.getElementById('inputContactCheck').checked;

        if (name !== "" &&
            firstName !== "" && 
            email !== "" && 
            title !== "" &&
            message  !== "" &&
            checked ) {
                
            localStorage.setItem('email', email);
            localStorage.setItem('name', name);
            localStorage.setItem('firstName', firstName);
            localStorage.setItem('checked', checked);

            this.eventListenerMethod();
            alert('Votre message à été envoyer avec succes!');
        } else {
            alert('Veuillez remplir tous les champs correctement.');
        }
    }
}
