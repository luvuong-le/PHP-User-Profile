// Set the flash message to disappear after 5 seconds of being shown on the screen
let flash = {
    e: {
        flashMessage: document.getElementById("form-container__error"),
    },

    hideMessage: function() {
        setTimeout(() => {
                this.e.flashMessage.style.display = "none";
        }, 3500);
    },

    init: function() {
        this.hideMessage();
    }
};

flash.init();