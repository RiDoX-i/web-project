document.addEventListener("DOMContentLoaded", function () {
    // Récupération des paramètres de l'URL pour afficher les messages de succès ou erreur
    const params = new URLSearchParams(window.location.search);

    // Vérification de la présence d'un message de succès ou d'erreur dans l'URL
    if (params.get("success") === "true") {
        // Affichage d'un message de succès (sur la page, sans alerte)
        const successMessage = document.createElement('p');
        successMessage.textContent = "Votre demande a bien été envoyée !";
        successMessage.style.color = 'green';
        document.body.appendChild(successMessage); // Affichage du message dans la page
        setTimeout(() => {
            window.location.href = "http://localhost/web-project/main-menu/home.php";
        }, 5000);
    }

    if (params.get("error") === "true") {
        // Affichage d'un message d'erreur (sur la page, sans alerte)
        const errorMessage = document.createElement('p');
        errorMessage.textContent = "Une erreur est survenue lors de l'envoi du formulaire.";
        errorMessage.style.color = 'red';
        document.body.appendChild(errorMessage); // Affichage du message dans la page
    }

    // Gestion de l'affichage dynamique et du calcul du prix
    const serviceSelect = document.getElementById('service');
    const programmeDetails = document.getElementById('programme-details');
    const courseType = document.getElementById('course-type');
    const sessionCount = document.getElementById('session-count');
    const programmeType = document.getElementById('programme-type');
    const priceField = document.getElementById('price');

    // Mise à jour de l'affichage des détails du programme en fonction du service sélectionné
    function updateForm() {
        const service = serviceSelect.value;
        if (service === 'programme') {
            programmeDetails.style.display = 'block';
        } else {
            programmeDetails.style.display = 'none';
        }
        updatePrice();
    }

    // Calcul du prix en fonction des choix dans le formulaire
    function updatePrice() {
        const service = serviceSelect.value;
        const course = courseType.value;
        const sessions = parseInt(sessionCount.value) || 1;
        const programme = programmeType.value;
        let price = 0;

        // Prix de base en fonction du service
        if (service === 'individuel') price += 50;
        else if (service === 'collectif') price += 20;
        else if (service === 'programme') {
            price += 100;
            if (programme === 'reeducation') price += 150;
            else if (programme === 'entrainement') price += 200;
            else if (programme === 'suivi') price += 250;
        }

        // Prix en fonction du type de cours
        if (course === 'yoga') price += 10 * sessions;
        else if (course === 'fitness') price += 15 * sessions;
        else if (course === 'musculation') price += 20 * sessions;

        priceField.value = price; // Affichage du prix calculé dans le champ correspondant
    }

    // Ajout d'événements pour la mise à jour du formulaire et du prix
    if (serviceSelect) {
        serviceSelect.addEventListener('change', updateForm);
        courseType.addEventListener('change', updatePrice);
        sessionCount.addEventListener('input', updatePrice);
        programmeType.addEventListener('change', updatePrice);
        updateForm();
    }

    // Gestion de la validation des champs et de la soumission du formulaire
    const form = document.querySelector("form");
    const inputs = Array.from(form.querySelectorAll("input, select"));
    const submitBtn = form.querySelector("button[type='submit']");
    
    // Fonction pour vérifier la validité des champs et gérer leur verrouillage
    function verrouillerChamps() {
        let blocage = false;

        // Suppression des messages d'erreur précédents
        document.querySelectorAll('.error-message').forEach(function (err) {
            err.remove();
        });

        inputs.forEach(input => {
            if (blocage) {
                input.disabled = true;  // Verrouille les champs suivants si un champ est invalide
            } else {
                input.disabled = false;  // Rendre les champs actifs à nouveau
                // Vérifie la validité de chaque champ
                if (!input.checkValidity() || input.value.trim() === "") {
                    blocage = true;  // Si un champ est invalide, on bloque les suivants
                    // Ajout d'un message d'erreur en dessous du champ concerné
                    const errorMessage = document.createElement('p');
                    errorMessage.textContent = "Ce champ est requis.";
                    errorMessage.style.color = 'red';
                    errorMessage.className = 'error-message'; 
                    input.insertAdjacentElement('afterend', errorMessage);
                }
            }
        });

        // Désactive le bouton de soumission si un champ est invalide
        submitBtn.disabled = !form.checkValidity();
    }
    
    // Ajout d'écouteurs d'événements pour chaque champ
    inputs.forEach(input => {
        input.addEventListener("input", verrouillerChamps);
        input.addEventListener("change", verrouillerChamps);
    });
    
    // Appel initial pour vérifier la validité dès le chargement de la page
    verrouillerChamps();

    // Validation et soumission du formulaire
    form.addEventListener("submit", function(event) {
        // Empêche l'envoi du formulaire si un champ est invalide
        if (!form.checkValidity()) {
            event.preventDefault();
            // Affichage d'un message général si le formulaire est incomplet
            const errorMessage = document.createElement('p');
            errorMessage.textContent = "Veuillez remplir tous les champs correctement avant de soumettre.";
            errorMessage.style.color = 'red';
            document.body.appendChild(errorMessage);
        }
    });
});
