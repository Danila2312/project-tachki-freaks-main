// console.log("123")
let buttons = document.querySelectorAll(".button-car");
let category = new Map([
  ["suv", document.querySelectorAll(".suv")],
  ["business", document.querySelectorAll(".business")],
  ["sport", document.querySelectorAll(".sport")],
  ["premium", document.querySelectorAll(".premium")],
  ["comfort", document.querySelectorAll(".comfort")],
]);
let allCards = document.querySelectorAll(".second-section__cars-item ");
function DisplayCards(car) {
  allCards.forEach((card) => {
    card.style.display = "none";
  });
  category.get(car).forEach((card) => {
    card.style.display = "block";
  });
}
for (let button of buttons) {
  button.addEventListener("click", function () {
    if (!button.classList.contains("button-active")) {
      console.log("Нажатие на неактивную кнопку");
      buttons.forEach((button) => {
        button.classList.remove("button-active"); // убираем класс у всех кнопок
        this.classList.add("button-active"); // добавляем класс к нажатой кнопке
      });
      DisplayCards(this.dataset.category);
    } else {
      console.log("Нажатие на активную кнопку");
    }
  });
}
document.querySelector(".button-all").addEventListener("click", function (evt) {
  evt.preventDefault();
  allCards.forEach((card) => {
    card.style.display = "block";
  });
  buttons.forEach((button) => {
    button.classList.remove("button-active");
  });
});
