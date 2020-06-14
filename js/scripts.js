var dropdown = document.querySelector("nav .dropdown");
var button = document.querySelector("nav .menu");
var body = document.querySelector("body");

function menu(){
  if(dropdown.style.display ==="grid"){
    dropdown.style.display = "none";
    button.innerHTML = "menu"
    body.style.gridAutoRows ="100px 50vh auto 10em";
  }else {
    dropdown.style.display = "grid";
    button.innerHTML = "close"
    body.style.gridAutoRows ="auto 40% auto 10em";
  }
}

window.addEventListener("resize", function(){
  if (window.innerWidth > 500) {
    dropdown.style.display = "none";
    button.innerHTML = "menu";
  }
})
