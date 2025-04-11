var connexionBtn = document.getElementById('submit-connexion');
var emailLogin = document.getElementById('login-email');
var loginPassword = document.getElementById('login-password');
var regexmail = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$";

function checkform(event) {
  document.querySelectorAll('#block1 .error').forEach(function(err) {
    err.remove();
  });

  if (!emailLogin.value || !loginPassword.value) {
    var errorMessage = document.createElement('p');
    errorMessage.textContent = "Veuillez remplir tous les champs";
    errorMessage.style.color = 'red';
    errorMessage.className = 'error';
    document.querySelector('#block1').appendChild(errorMessage);
    event.preventDefault();
    return false;
  }

  if (!emailLogin.value.match(regexmail)) {
    var errorMessage = document.createElement('p');
    errorMessage.textContent = "Adresse email invalide, respectez le format ( exemple@domaine.com )";
    errorMessage.style.color = 'red';
    errorMessage.className = 'error';
    document.querySelector('#block1').appendChild(errorMessage);
    event.preventDefault();
    return false;
  }
}

document.addEventListener('DOMContentLoaded', function () {
  connexionBtn.addEventListener('click', checkform);
});


/*Signup*/

  var name = document.getElementById('name');
  var prenom = document.getElementById('fname');
  var genre = document.getElementById('gender');
  var date = document.getElementById('birth-date');
  var emailSign = document.getElementById('email-signup');
  var password = document.getElementById('password-signup');
  var confirmPassword = document.getElementById('cpassword');
  var adresse = document.getElementById('adress');
  var ville = document.getElementById('city'); 
  var codePostal = document.getElementById('cp');
  var condition = document.getElementById('TC');
  var inscriptionBtn = document.getElementById('submit-inscription');

  function checkformSignup(event) {
    
    var existingError = document.querySelector('.error-message');
    if (existingError) {
      existingError.remove();
    }

    if (
      emailSign.value === "" ||
      password.value === "" ||
      confirmPassword.value === "" ||
      adresse.value === "" ||
      ville.value === "" ||
      codePostal.value === ""
    ) {
      var errorMessage = document.createElement('p');
      errorMessage.textContent = "Veuillez remplir tous les champs";
      errorMessage.style.color = 'red';
      errorMessage.className = 'error-message'; 
      var parent = document.getElementById('block2') 
      parent.appendChild(errorMessage);
      event.preventDefault();
      return false;
    }

    if (password.value !== confirmPassword.value) {
      var errorMessage = document.createElement('p');
      errorMessage.textContent = "Les mots de passe ne correspondent pas";
      errorMessage.style.color = 'red';
      errorMessage.className = 'error-message';
      var parent = document.getElementById('block2') 
      parent.appendChild(errorMessage);
      event.preventDefault();
      return false;
    }

    if (!condition.checked) {
      var errorMessage = document.createElement('p');
      errorMessage.textContent = "Vous devez accepter les conditions";
      errorMessage.style.color = 'red';
      errorMessage.className = 'error-message';
      var parent = document.getElementById('block2');
      parent.appendChild(errorMessage);
      event.preventDefault();
      return false;
    }

    if (!emailSign.value.match(regexmail)) {
      var errMessage= document.createElement("p")
      errMessage.textContent="Adresse email invalide, respectez le format ( exemple@domaine.com )";
      errMessage.style.color ='red';
      var parent = document.getElementById('block2') ;
      parent.appendChild(errMessage);
      event.preventDefault();
      event.preventDefault();
      return false;
      
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
  inscriptionBtn.addEventListener('click', checkformSignup);
});