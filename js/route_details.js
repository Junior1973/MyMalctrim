// Карусель

let pictures3 =["./imgRD/Demerdzhi111.png", "./imgRD/Demerdzhi222.png", "./imgRD/Demerdzhi333.png"]
let pictures2 =["./imgRD/Demerdzhi11.png", "./imgRD/Demerdzhi22.png", "./imgRD/Demerdzhi33.png"]
let pictures = ["./imgRD/Demerdzhi1.png", "./imgRD/Demerdzhi2.png", "./imgRD/Demerdzhi3.png"];  



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