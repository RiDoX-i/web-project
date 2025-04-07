/*document.addEventListener("DOMContentLoaded", () => {
    function validateForm(form) {
      let valid = true;
  
      const fields = form.querySelectorAll("input:not([type=submit]):not([type=hidden]), select");
      
      fields.forEach(field => {
        field.classList.remove("input-error");
  
        if ((field.type === "checkbox" && !field.checked) || field.value.trim() === "") {
          field.classList.add("input-error");
          valid = false;
        }
      });
  
      return valid;
    }
  
    const loginForm = document.getElementById("login-form");
    if (loginForm) {
      loginForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Empêche le submit automatique
        if (validateForm(loginForm)) {
          loginForm.submit(); // Submit manuel si tout est valide
        }
      });
    }
  
    const signupForm = document.getElementById("signup-form");
    if (signupForm) {
      signupForm.addEventListener("submit", function (e) {
        e.preventDefault();
        if (validateForm(signupForm)) {
          signupForm.submit();
        }
      });
    }
  });
  */

 var connexionBtn=document.getElementById('submit-connexion');
 var inscriptionBtn=document.getElementById('submit-inscription');

 var name=document.getElementById('name');
 var email=document.getElementById('email');
 var password=document.getElementById('password');
 var genre=document.getElementById('genre');
 var confirmPassword=document.getElementById('confirm-password');
 var adresse=document.getElementById('adresse');
 var ville=document.getElementById('ville');
 var codePostal=document.getElementById('code-postal');
 var condition=document.getElementById('condition');
