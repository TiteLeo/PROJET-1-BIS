const containerSlider = document.getElementById("slider");
let url = document.location.pathname.substring(1);
if (url === "armes.php") {
    let audio = document.getElementById("candy");
}
let imagesWeapons = ["bazooka.jpg",  "hache.jpg", "sulfateuse.jpg"];
let imagesWeaponsDescriptions = ["Lance rocket", "Hache", "Sulfateuse"];


let countImages = imagesWeapons.length;

for (let i = 0; i < imagesWeapons.length; i++) {
    let slideDiv = document.createElement("div");
    slideDiv.className = "slide";

    let image = document.createElement("img");
    image.className = "image";
    image.src = "./PHOTOS/" + imagesWeapons[i];
    image.alt = imagesWeaponsDescriptions[i];

    slideDiv.appendChild(image);
    containerSlider.appendChild(slideDiv);
}

const imagesDiv = document.getElementsByClassName("slide");
let currentSlide = 0
function sliderFunction (countImages) {
    let size = 80 * (currentSlide + 1);
    if (currentSlide === imagesDiv.length - 1) {
        containerSlider.style.left = "0";
        currentSlide = 0;
    } else {
        containerSlider.style.left = "-" +size + "vw";
        currentSlide++;
    }
}

setInterval("sliderFunction()", 4000);