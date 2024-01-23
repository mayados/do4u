function validateForm() {
  var nom = document.getElementById("nom").value;
  var prenom = document.getElementById("prenom").value;
  var email = document.getElementById("email").value;
  var ville = document.getElementById("ville").value;
  var codePostal = document.getElementById("codePostal").value;
  var motPass = document.getElementById("motPass").value;
  var motPassConfirm = document.getElementById("motPassConfirm").value;
  var flexCheckDefault = document.getElementById("flexCheckDefault").checked;

  // Clear previous error messages
  clearErrors();

  if (nom.trim() === "") {
    displayError("error-nom", "Ce champ est obligatoire.");
  }

  if (prenom.trim() === "") {
    displayError("error-prenom", "Ce champ est obligatoire.");
  }

  if (email.trim() === "") {
    displayError("error-email", "Ce champ est obligatoire.");
  }

  if (ville.trim() === "") {
    displayError("error-ville", "Ce champ est obligatoire.");
  }

  if (codePostal.trim() === "") {
    displayError("error-codePostal", "Ce champ est obligatoire.");
  }

  if (motPass.trim() === "") {
    displayError("error-motPass", "Ce champ est obligatoire.");
  }

  if (motPassConfirm.trim() === "") {
    displayError("error-motPassConfirm", "Ce champ est obligatoire.");
  }

  if (motPass !== motPassConfirm) {
    displayError(
      "error-motPassConfirm",
      "Les mots de passe ne correspondent pas."
    );
  }

  if (!isPasswordComplex(motPass)) {
    displayError(
      "error-motPass",
      "Le mot de passe doit avoir au moins 8 caractères avec au moins une majuscule, un chiffre et un caractère spécial."
    );
  }

  if (!flexCheckDefault) {
    displayError(
      "error-flexCheckDefault",
      "Vous devez accepter les conditions générales d'utilisation et la politique de confidentialité."
    );
  }

  return false;
}

function isPasswordComplex(password) {
  var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;
  return regex.test(password);
}

function displayError(elementId, message) {
  var errorElement = document.getElementById(elementId);
  errorElement.innerHTML = message;
}

function clearErrors() {
  var errorElements = document.querySelectorAll(".error-message");
  errorElements.forEach(function (element) {
    element.innerHTML = "";
  });
}
