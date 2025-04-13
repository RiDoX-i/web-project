document.addEventListener('DOMContentLoaded', function () {
    var contactForm = document.querySelector('form');
    var submitBtn = contactForm.querySelector('button[type="submit"]');
    
    var regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var regexPhone = /^(0[1-9])(\d{8})$/;
  
    // Fonction de validation du formulaire
    function validateForm(event) {
      // Supprimer les messages d'erreur existants
      document.querySelectorAll('.error').forEach(function(err) {
        err.remove();
      });
  
      // Récupérer les valeurs des champs
      var name = document.getElementById('name').value;
      var fname = document.getElementById('fname').value;
      var email= document.getElementById('email').value;
      var phone =document.getElementById('phone').value;
      var message= document.getElementById('contact').value;
  
      var hasError = false;
  
      // Vérifier si tous les champs sont remplis
      if (!name|| !fname || !email || !phone || !message) {
        var errorMessage =document.createElement('p');
        errorMessage.textContent ="Veuillez remplir tous les champs.";
        errorMessage.className='error';
        errorMessage.style.color= 'red';
        contactForm.appendChild(errorMessage);
        hasError = true;
      }
  
      // Vérifier si l'email est valide
      if (email && !regexEmail.test(email)) {
        var errorMessage=document.createElement('p');
        errorMessage.textContent= "Adresse email non valide.";
        errorMessage.className='error';
        errorMessage.style.color='red';
        contactForm.appendChild(errorMessage);
        hasError = true;
      }
  
      // Vérifier si le téléphone est valide
      if (phone && !regexPhone.test(phone)) {
        var errorMessage=document.createElement('p');
        errorMessage.textContent = "Numéro de téléphone non valide. Utilisez le format français.";
        errorMessage.className= 'error';
        errorMessage.style.color ='red';
        contactForm.appendChild(errorMessage);
        hasError = true;
      }
      // Si des erreurs ont été trouvées, empêcher l'envoi du formulaire
      if (hasError) {
        event.preventDefault();
        return false;
      }
    }
  
    submitBtn.addEventListener('click', validateForm);
  });
  