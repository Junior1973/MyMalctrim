let tabs = document.getElementsByClassName("main-menu-li");
let tabsText = document.getElementsByClassName("tabs-item1");

Array.from(tabs).forEach((el) => {
  el.addEventListener("click", navClick);
});

function navClick() {
  document.querySelectorAll(".main-menu-li").forEach((el) => {
    el.classList.remove("tabs-memo-active1");
  });
  this.classList.add("tabs-memo-active1");

  document.querySelectorAll(".tabs-item1").forEach((el) => {
    el.classList.remove("tabs-item-active1");
  });
  switch (this.id) {
    case "tab-night-btn1":
      tabText1.classList.add("tabs-item-active1");
      break;
    case "tab-night-btn2":
      tabText2.classList.add("tabs-item-active1");
      break;
    case "tab-night-btn3":
      tabText3.classList.add("tabs-item-active1");
      break;
      case "tab-night-btn4":
      tabText3.classList.add("tabs-item-active1");
      break;
  }
}
