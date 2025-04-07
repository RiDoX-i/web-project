document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll("form");

    forms.forEach(form => {
        form.addEventListener("submit", function (e) {
            const requiredFields = form.querySelectorAll("input[required], select[required]");
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add("is-invalid");
                    isValid = false;
                } else {
                    field.classList.remove("is-invalid");
                }
            });

            if (!isValid) {
                e.preventDefault(); // empêche l’envoi du formulaire si invalide
            }
        });
    });
});
