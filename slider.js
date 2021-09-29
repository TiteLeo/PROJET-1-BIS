const containerSlider = document.getElementById("slider");
let imagesWeapons = ["bazooka.jpg",  "fleau.jpg", "sulfateuse.jpg"];
let imagesWeaponsDescriptions = ["Lance rocket", "L'arme le fleau", "Sulfateuse"];


let countImages = imagesWeapons.length;

for (let i = 0; i < imagesWeapons.length; i++) {
    let slideDiv = document.createElement("div");
    slideDiv.className = "slide";

    let image = document.createElement("img");
    image.className = "image"
    image.src = "./PHOTOS/" + imagesWeapons[i];
    image.alt = imagesWeaponsDescriptions[i];

    slideDiv.appendChild(image);
    containerSlider.appendChild(slideDiv);
}