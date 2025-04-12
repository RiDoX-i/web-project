document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const submitBtn = form.querySelector('button[type="submit"]');

    const regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const regexPhone = /^(0[1-9])(\d{8})$/;

    const serviceSelect = document.getElementById('service');
    const programmeDetails = document.getElementById('programme-details');
    const courseType = document.getElementById('course-type');
    const sessionCount = document.getElementById('session-count');
    const programmeType = document.getElementById('programme-type');
    const priceField = document.getElementById('price');

    function updateForm() {
        if (serviceSelect.value === 'programme') {
            programmeDetails.style.display = 'block';
        } else {
            programmeDetails.style.display = 'none';
        }
        updatePrice();
    }

    function updatePrice() {
        const service = serviceSelect.value;
        const course = courseType.value;
        let sessions = parseInt(sessionCount.value) || 1;
        if (sessions < 1) sessions = 1;
        if (sessions > 5) sessions = 5;

        let price = 0;

        if (service === 'individuel') price += 50;
        else if (service === 'collectif') price += 20;
        else if (service === 'programme') {
            price += 100;
            if (programmeType.value === 'reeducation') price += 150;
            else if (programmeType.value === 'entrainement') price += 200;
            else if (programmeType.value === 'suivi') price += 250;
        }

        if (course === 'yoga') price += 10 * sessions;
        else if (course === 'fitness') price += 15 * sessions;
        else if (course === 'musculation') price += 20 * sessions;
        else if (course === 'cycling') price += 18 * sessions;
        else if (course === 'pilates') price += 22 * sessions;

        priceField.value = price;
    }

    function validateForm(event) {
        document.querySelectorAll('.error').forEach(el => el.remove());

        const name = document.getElementById('name').value.trim();
        const fname = document.getElementById('fname').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const handicap = document.getElementById('handicap').value;
        const service = serviceSelect.value;
        const course = courseType.value;
        const sessions = sessionCount.value.trim();
        const programme = programmeType.value;

        let hasError = false;

        function showError(message) {
            const errorMsg = document.createElement('p');
            errorMsg.textContent = message;
            errorMsg.className = 'error';
            errorMsg.style.color = 'red';
            errorMsg.style.marginTop = '10px';
            errorMsg.style.textAlign = 'center';
            form.appendChild(errorMsg);
        }

        if (!name || !fname || !email || !phone || !handicap || !service || !course || !sessions) {
            showError("Veuillez remplir tous les champs obligatoires.");
            hasError = true;
        }

        if (service === 'programme' && !programme) {
            showError("Veuillez choisir un type de programme.");
            hasError = true;
        }

        if (email && !regexEmail.test(email)) {
            showError("Adresse email invalide.");
            hasError = true;
        }

        if (phone && !regexPhone.test(phone)) {
            showError("Numéro de téléphone invalide (format FR attendu).");
            hasError = true;
        }

        const sessionVal = parseInt(sessionCount.value);
        if (sessionVal < 1 || sessionVal > 5) {
            showError("Le nombre de sessions doit être compris entre 1 et 5.");
            hasError = true;
        }

        if (hasError) {
            event.preventDefault();
        }
    }

    if (serviceSelect) {
        serviceSelect.addEventListener('change', updateForm);
        programmeType.addEventListener('change', updatePrice);
        courseType.addEventListener('change', updatePrice);
        sessionCount.addEventListener('input', updatePrice);
        sessionCount.addEventListener('input', function () {
            if (parseInt(this.value) > 5) this.value = 5;
            if (parseInt(this.value) < 1) this.value = 1;
        });
        updateForm();
    }

    submitBtn.addEventListener('click', validateForm);
});