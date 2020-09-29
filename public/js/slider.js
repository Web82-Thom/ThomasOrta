class Slider {
    constructor(slider) {
        this.index = 0;
        this.time = 8000;
        this.interval = 0; 
        this.slides = document.getElementsByClassName("slide");
        
        this.display();
        this.autoMove();
    }

    display() {
        Array.prototype.forEach.call(this.slides, function(e) {e.style.display = "none"}); // fait que ma collection soit un tableau
        this.slides[this.index].style.display = "block";
    }
    
    autoMove() {
        this.interval = setInterval(() => {
            this.nextSlide();
        }, this.time);
    }

    nextSlide() {
        if (this.index < this.slides.length - 1 ) { 
            this.index++;
        } else {
            this.index = 0;
        }

        this.display();
    }
}
