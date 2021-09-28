<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Commissariat</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    />
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <section id="contact">
      <h1>Formulaire de délit</h1>
      <p></p>
      <form id="contactForm">
        <label for="firstname">First name:</label><br />
        <input
          type="text"
          id="firstname"
          name="firstname"
          value="Votre prénom"
        /><br />
        <label for="lastname">Last name:</label><br />
        <input type="text" id="lastname" name="lastname" value="Votre nom" /><br />
        <label for="email">Email:</label><br />
        <input
          type="email"
          id="email"
          name="email"
          value="faites_nous_confiance@jailhouse.com"
        /><br />
        <label for="message">Expliquez nous tranquillement votre délit:</label><br />
        <textarea id="message" name="message"></textarea>
        <br /><br />
        <input type="submit" value="Submit" />
      </form>
    </section>

    <script src="script.js"></script>
  </body>
</html>