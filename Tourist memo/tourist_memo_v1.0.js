let tabs = document.getElementsByClassName("tabs_memo");
let tabsText = document.getElementsByClassName("tabs-item");

Array.from(tabs).forEach((el) => {
  el.addEventListener("click", navClick);
});

function navClick() {
  document.querySelectorAll(".tabs_memo").forEach((el) => {
    el.classList.remove("tabs-memo-active");
  });
  this.classList.add("tabs-memo-active");

  document.querySelectorAll(".tabs-item").forEach((el) => {
    el.classList.remove("tabs-item-active");
  });
  switch (this.id) {
    case "tab-btn1":
      tabText1.classList.add("tabs-item-active");
      break;
    case "tab-btn2":
      tabText2.classList.add("tabs-item-active");
      break;
    case "tab-btn3":
      tabText3.classList.add("tabs-item-active");
      break;
  }
}
