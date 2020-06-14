require("alpinejs");
require("./bootstrap");

window.contactForm = function() {
    return {
        name: "",
        contact: "",
        message: "",
        loading: false,
        submit() {
            this.loading = true;
            setTimeout(() => {
                alert(`
                    name: ${this.name},
                    contact: ${this.contact},
                    message: ${this.message}
                `);
                this.loading = false;
                this.clearForm();
            }, 2000);
        },
        clearForm() {
            this.name = "";
            this.contact = "";
            this.message = "";
        }
    };
};
