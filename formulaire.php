<?php require 'nav.php' ?>
<section id="contact">
    <h1> Formulaire de délation </h1>
    <form id="contactForm">
        <p><label for="firstname"> Prénom :</label></p>
        <input type="text" id="firstname" name="firstname" value="ROSE"/>

        <p><label for="lastname"> Nom :</label></p>
        <input type="text" id="lastname" name="lastname" value="BIFFE"/>

        <p><label for="email">Email:</label></p>
        <input type="email" id="email" name="email" value="ayez_confiance@jailhouse.com"/>

        <p><label for="message">#Balancez votre proche:</label></p>
        <textarea id="message" name="message" placeholder="Lachez les vannes!"></textarea>

        <p><button>Soumission</button></p>
    </form>
</section>
<h2> Avis Trippes Avisées </h2>
<form id="form">
    <textarea id="avis" name="avis" placeholder="Nous aussi on vous aime!"></textarea>
    <p><button id="button-avis"><img src="PHOTOS/logonew.png" alt="logo" id="image-button"></button></p>
</form>
<h3> Meilleurs commentaires </h3>
<ul id="avisList">
    <li class='avis'>J'ai adoré les douches!!! (Michel Buse)</li>
    <li class='avis'>MERCI!! Grâce au commissariat j'ai rencontré Marie-Jeanne, qui m'a appris le jardinage, et Walter,
        ancien prof de chimie en reconversion pro <3.(Danielle Quiche)</li>
    <li class='avis'>Très déçu du shop!! La kalachnikov s'est enraillée au bout de 2 utilisations! C'est scandaleux!! (Jean Mairde)</li>
</ul>
<script src="JS/formulaire.js"></script>
<?php require'footer.php' ?>
</body>
</html>