<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Commissariat</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet"> 
    <link href="formulaire.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <section id="contact">
      <h1> Formulaire de délit </h1>
      
      <form id="contactForm">
        <p><label for="firstname"> Prénom :</label></p>
        <input
          type="text"
          id="firstname"
          name="firstname"
          value="ROSE"
        />
        <p><label for="lastname"> Nom :</label></p>
        <input type="text" id="lastname" name="lastname" value="BIFFE"/>
        <p><label for="email">Email:</label></p>
        <input
          type="email"
          id="email"
          name="email"
          value="ayez_confiance@jailhouse.com"
        />
        <p><label for="message">Expliquez-nous tranquillement votre délit:</label></p>
        <textarea id="message" name="message" placeholder="Lachez les vannes!"></textarea>
        <p><button>Soumission</button></p>
      </form>
    </section>
    <h2> Avis Trippes Avisées </h2>
    <form id="form">
       <textarea id="avis" name="avis" placeholder="Nous aussi on vous aime!"></textarea> 
        <p><input type="submit" id="image-button"></input>
    </form>
    <h3> Meilleurs commentaires </h3>
    <ul id="avisList">
        <li>J'ai adoré les douches!!! (Michel Buse)</li>
        <li>MERCI!! Grâce au commissariat j'ai rencontré 
            Marie-Jeanne, qui m'a appris le jardinage, et
            Walter, ancien prof de chimie en reconversion pro <3.(Danielle Quiche)</li>
    </ul>   
    <script src="formulaire.js"></script>
  </body>
</html>