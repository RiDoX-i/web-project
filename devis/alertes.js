document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);

    if (params.get("success") === "true") {
        alert("Votre demande a bien été envoyée !");
        setTimeout(() => {
            window.location.href = "index.php";
        }, 5000);
    }

    if (params.get("error") === "true") {
        alert("Une erreur est survenue lors de l'envoi du formulaire.");
    }

    // Gestion de l'affichage dynamique et du calcul du prix
    const serviceSelect = document.getElementById('service');
    const programmeDetails = document.getElementById('programme-details');
    const courseType = document.getElementById('course-type');
    const sessionCount = document.getElementById('session-count');
    const programmeType = document.getElementById('programme-type');

    function updateForm() {
        const service = serviceSelect.value;
        if (service === 'programme') {
            programmeDetails.style.display = 'block';
        } else {
            programmeDetails.style.display = 'none';
        }
        updatePrice();
    }

    function updatePrice() {
        const service = serviceSelect.value;
        const course = courseType.value;
        const sessions = parseInt(sessionCount.value) || 1;
        const programme = programmeType.value;
        let price = 0;

        if (service === 'individuel') price += 50;
        else if (service === 'collectif') price += 20;
        else if (service === 'programme') {
            price += 100;
            if (programme === 'reeducation') price += 150;
            else if (programme === 'entrainement') price += 200;
            else if (programme === 'suivi') price += 250;
        }

        if (course === 'yoga') price += 10 * sessions;
        else if (course === 'fitness') price += 15 * sessions;
        else if (course === 'musculation') price += 20 * sessions;

        document.getElementById('price').value = price;
    }

    if (serviceSelect) {
        serviceSelect.addEventListener('change', updateForm);
        courseType.addEventListener('change', updatePrice);
        sessionCount.addEventListener('input', updatePrice);
        programmeType.addEventListener('change', updatePrice);
        updateForm();
    }
});
