const message =
  "Le commissariat de police vous remercie pour votre bêtise....honneteté. A très très vite.";

document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
  });