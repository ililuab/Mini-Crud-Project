let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// const button = document.querySelector('#pokemon');

// fetch("https://pokeapi.co/api/v2/pokemon/")
// .then ((response) => {
//   return response.json(); 
// })
// .then ((data) => {
//   data.results.forEach((data) => {
//     button.innerHTML += "<div>" + data["name"] + "</div"
//   })
//   console.log(data)
// })

// .catch ((e) => {
//   console.log(e)
// })


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