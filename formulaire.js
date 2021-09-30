const message =
  " le commissariat vous remercie pour votre....euh....honneteté. A très TRES vite.";
const firstName = document.getElementById("firstname");

document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert(firstName.value + message);
  });


const form = document.querySelector("#form");
const inputAvis = document.querySelector("#avis");
const avisList = document.querySelector("#avisList");

form.onsubmit = function(event) {
    event.preventDefault();
    const newAvis = document.createElement("li");
    newAvis.innerHTML = inputAvis.value;
    avisList.appendChild(newAvis);
    inputAvis.value = "";

};