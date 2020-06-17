var dropdown = document.querySelector("nav .dropdown");
var button = document.querySelector("nav .menu");
var body = document.querySelector("body");
var navbar = document.querySelector("nav .content");

function menu(){
  if(dropdown.style.display ==="grid"){
    dropdown.style.display = "none";
    button.innerHTML = "menu"
    body.style.gridAutoRows ="100px 88vh auto 10em";
  }else {
    dropdown.style.display = "grid";
    button.innerHTML = "close"
    body.style.gridAutoRows ="100px 88vh auto 10em";
    navbar.style.height = "100px";
  }
}

window.addEventListener("resize", function(){
  if (window.innerWidth > 500) {
    dropdown.style.display = "none";
    button.innerHTML = "menu";
  }
})
