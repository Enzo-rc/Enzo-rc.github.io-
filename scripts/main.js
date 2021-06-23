
let monImage = document.querySelector('img');
monImage.addEventListener('click', function() {
let monSrc = monImage.getAttribute('src');
if (monSrc === 'Images/Terrestar.jpg') {
monImage.setAttribute('src', 'Images/Starblue.jpg');
} else {
monImage.setAttribute('src', 'Images/Terrestar.jpg');
}
});