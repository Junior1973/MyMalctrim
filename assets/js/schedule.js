let tabs = document.getElementsByClassName("main-menu-li");
let btns = document.getElementsByClassName("drop-link");
let tabsText = document.getElementsByClassName("tabs-item1");
let dropBtn = document.querySelector("#drop-btn-1");

Array.from(tabs).forEach((el) => {
  el.addEventListener("click", navClick);
});
Array.from(btns).forEach((el) => {
  el.addEventListener("click", navClick);
});

function navClick() {
  document.querySelectorAll(".main-menu-li").forEach((el) => {
    el.classList.remove("tabs-memo-active1");
  });
  if (this.classList.contains("main-menu-li")) {
    this.classList.add("tabs-memo-active1");
  }

  document.querySelectorAll(".tabs-item1").forEach((el) => {
    el.classList.remove("tabs-item-active1");
  });
  switch (this.id) {
    case "tab-night-btn1":
      tabText1.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
    case "tab-night-btn2":
      tabText2.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
    case "tab-night-btn3":
      tabText3.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
    case "tab-night-btn4":
      tabText4.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
    case "dr-link1":
      tabText1.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
    case "dr-link2":
      tabText2.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
    case "dr-link3":
      tabText3.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
    case "dr-link4":
      tabText4.classList.add("tabs-item-active1");
      dropBtn.textContent = this.textContent;
      break;
  }
}

function myFunction() {
  document.getElementById("drop-menu-1").classList.toggle("show");
  dropBtn.classList.toggle("hide");
}

window.onclick = function (event) {
  if (!event.target.matches(".drop-btn")) {
    if (dropBtn.classList.contains("hide")) {
      dropBtn.classList.toggle("hide");
    }
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};
