const message =
  " le commissariat vous remercie pour votre....euh....honneteté. A très TRES vite.";
const firstName = document.getElementById("firstname");

const contactForm = document.getElementById("contactForm")
contactForm.addEventListener("submit", function (event) {
  event.preventDefault();
  alert(firstName.value + message);
});

const formAvis = document.querySelector("#form");
const inputAvis = document.querySelector("#avis");
const avisList = document.querySelector("#avisList");

formAvis.addEventListener("submit", function(event) {
    event.preventDefault();
    if(inputAvis.value !== ""){
      const newAvis = document.createElement("li"); 
      newAvis.innerHTML = inputAvis.value;
      avisList.appendChild(newAvis);
      inputAvis.value = "";
    }
});