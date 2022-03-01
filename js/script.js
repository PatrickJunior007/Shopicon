const arrowMega = document.querySelector(".create_second");
const megaDrop = document.querySelector("#boolover");

megaDrop.addEventListener("click", () => {
  if (arrowMega.style.transform == "rotate(90deg)") {
    arrowMega.style.transform = "rotate(0deg)";
  } else {
    arrowMega.style.transform = "rotate(90deg)";
  }
});



//For media query navigation bar
const arrowdown = document.querySelector(".create_first");
const arrow = document.querySelector("#crossover");

arrow.addEventListener("click", () => {
  if (arrowdown.style.transform == "rotate(90deg)"){
    arrowdown.style.transform = "rotate(0deg)";
  } else {
    arrowdown.style.transform = "rotate(90deg)";
  }
});

//Gotop button index
var scroll = document.querySelector(".gotop123");
window.addEventListener("scroll", function () {
  scroll.classList.toggle("active", window.scrollY > 300);
}, false);

//Original version spelt accordion accordian?
/*jQuery time*/
$(document).ready(function () {
  $("#accordion .accord_div").click(function () {
    //slide up all the link lists
    $("#accordion ul ul").slideUp(200);
    //slide down the link list below the h3 clicked - only if its closed
    if (!$(this).next().is(":visible")) {
      $(this).next().slideDown(200);
    }
  });
});




$(function () {
  FastClick.attach(document.body);
});



