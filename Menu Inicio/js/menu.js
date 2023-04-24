function aparece() {
  let apare = document.getElementsByClassName("menuico")[0];
  apare.classList.toggle("show");
  let menu = document.querySelectorAll(".mostrar");
  for (let i = 0; i < menu.length; i++) {
    menu[i].classList.toggle("menu");
  }
}
