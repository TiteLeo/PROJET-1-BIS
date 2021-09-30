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
    <link href="formulaire.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <section id="contact">
      <h1> Formulaire de délit </h1>
      <p></p>
      <form id="contactForm">
        <label for="firstname"> Prénom :</label><br />
        <input
          type="text"
          id="firstname"
          name="firstname"
          value="ROSE"
        /><br />
        <label for="lastname"> Nom :</label><br />
        <input type="text" id="lastname" name="lastname" value="BIFFE" /><br />
        <label for="email">Email:</label><br />
        <input
          type="email"
          id="email"
          name="email"
          value="ayez_confiance@jailhouse.com"
        /><br />
        <label for="message">Expliquez-nous tranquillement votre délit:</label><br />
        <textarea id="message" name="message" placeholder="Lachez les vannes!"></textarea>
        <br /><br />
        <input type="submit" value="Soumission" />
      </form>
    </section>

    <h2> Avis Trippes Avisées </h2>
    <form id="form">
       <textarea id="avis" name="avis" placeholder="Nous aussi on vous aime!"></textarea> 
        <input type="submit" value="soumission" />
    </form>
    <h3> Meilleurs commentaires </h3>
    <ul id="avisList">
        <li>J'ai adoré les douches!!! (Michel Buse)</li>
        <li>MERCI!! Grâce au commissariat j'ai rencontré Marie-Jeanne, qui m'a appris le jardinage, et
            Walter, ancien prof de chimie en reconversion pro <3. (Danielle Quiche)</li>
    </ul>   
    <script src="formulaire.js"></script>
  </body>
</html>