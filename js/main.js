// const button = document.querySelector('#form #button');

// button.addEventListener('click', (e) => {
//     e.preventDefault();

//     const inputs = document.querySelectorAll('#form input');

//     for (let i = 0; i < inputs.length; i++) {
//         if(inputs[i].hasAttribute("required")){
//             if(inputs[i].value == ""){
//                 inputs[i].style.border = "1px solid red";
//             }
//         }
//     }
// })

// const slideIndex = 1;
// showDivs(slideIndex);

// function plusDivs(n) {
//   showDivs(slideIndex += n);
// }

// function showDivs(n) {
//   const i;
//   const x = document.querySelectorAll("gallery-fotos");
//   if (n > x.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = x.length}
//   for (i = 0; i < x.length; i++) {
//     x[i].style.display = "none";  
//   }
//   x[slideIndex-1].style.display = "block";  
// }

const slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.querySelector("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}




