// Карусель

let pictures3 =["./assets/imgRD/Demerdzhi111.png", "./assets/imgRD/Demerdzhi222.png", "./assets/imgRD/Demerdzhi333.png"]
let pictures2 =["./assets/imgRD/Demerdzhi11.png", "./assets/imgRD/Demerdzhi22.png", "./assets/imgRD/Demerdzhi33.png"]
let pictures = ["./assets/imgRD/Demerdzhi1.png", "./assets/imgRD/Demerdzhi2.png", "./assets/imgRD/Demerdzhi3.png"];  



const img = document.getElementById("carousel");
const rightBtn = document.getElementById("right-btn");
const leftBtn = document.getElementById("left-btn");



img.src = pictures[0];
let position = 0;

const moveRight = () => {
  if (position >= pictures.length - 1) {
    position = 0;
    img.src = pictures[position];
    return;
  }
  img.src = pictures[position + 1];
  position++;
};

const moveLeft = () => {
  if (position < 1) {
    position = pictures.length - 1;
    img.src = pictures[position];
    return;
  }
  img.src = pictures[position - 1];
  position--;
};

rightBtn.addEventListener("click", moveRight);
leftBtn.addEventListener("click", moveLeft);
img.addEventListener("click", moveLeft);