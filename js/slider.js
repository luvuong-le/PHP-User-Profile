let compSlider = {
    e: {
        left: document.getElementById("split__left"),
        right: document.getElementById("split__right"),
    }, 

    addListeners: function() {
        this.e.left.addEventListener("mouseenter", (e) => {
            this.addHover(e.target);
        });

        this.e.left.addEventListener("mouseleave", (e) => {
            this.removeHover(e.target);
        });

        this.e.right.addEventListener("mouseenter", (e) => {
            console.log("heher");
            this.addHover(e.target);
        });

        this.e.right.addEventListener("mouseleave", (e) => {
            this.removeHover(e.target);
        });

        document.addEventListener("mouseleave", (e) => {
            this.reset(this.e.left);
            this.reset(this.e.right);
           
        });
    }, 

    addHover: function(element) {
        // element.classList.remove("reset");
        element.classList.remove("unhovered");
        element.classList.add("hovered");
    },

    removeHover: function (element) {
        element.classList.remove("hovered");
        element.classList.add("unhovered");
    },

    reset: function (element) {
        element.classList.remove("hovered");
        element.classList.remove("unhovered");  
        // element.classList.add("reset");
    },

    init: function() {
        this.addListeners();
    }
};

compSlider.init();