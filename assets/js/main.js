// initialization
const year = document.querySelector(".year");
const date = new Date();
year.textContent = date.getFullYear();
const popUp = document.querySelector(".coming-soon-pop-up");
const featureContainers = document.querySelectorAll(".feature-item");
const closePopBtn = document.querySelector(".close-pop-btn");
const getRideForm = document.querySelector(".pop-out-forms");
console.log(getRideForm);
const showGetRideFormBtn = document.querySelectorAll(".get-a-ride-btn");
const closeGetRideFormBtn = document.querySelector(
  ".close-get-a-ride-form-btn"
);

console.log(closeGetRideFormBtn);
const showPopUp = () => {
  popUp.style.display = "grid";
};

const closePopUp = () => {
  popUp.style.display = "none";
};

showGetRideFormBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    getRideForm.style.display = "grid";
  });
});
// events
featureContainers.forEach((item) => {
  item.addEventListener("click", showPopUp);
});
closePopBtn.addEventListener("click", closePopUp);

closeGetRideFormBtn.addEventListener("click", (e) => {
  e.preventDefault();
  getRideForm.style.display = "none";
});
