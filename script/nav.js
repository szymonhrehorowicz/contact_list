const navBtn = document.querySelector(".nav__btn");
const navList = document.querySelector(".nav__list");
let navOpen = false;

navBtn.addEventListener("click", () => {
  if (!navOpen) {
    navBtn.classList.add("active");
    navList.classList.add("active");

    navOpen = true;
  } else {
    navBtn.classList.remove("active");
    navList.classList.remove("active");

    navOpen = false;
  }
});
