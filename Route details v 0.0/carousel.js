// Карусель
// function handleResize() {
//   const screenWidth = window.innerWidth;
//   console.log(screenWidth); // Выводит текущую ширину экрана в консоль
// }

// // Добавляем обработчик события resize
// window.addEventListener('resize', handleResize);
// Используйте значение screenWidth для нужных операций или обновлений
let pictures3 =["./img/Demerdzhi111.png", "./img/Demerdzhi222.png", "./img/Demerdzhi333.png"]
let pictures2 =["./img/Demerdzhi11.png", "./img/Demerdzhi22.png", "./img/Demerdzhi33.png"]
let pictures = ["./img/Demerdzhi1.png", "./img/Demerdzhi2.png", "./img/Demerdzhi3.png"];  

// function handleResize() {
//   const screenWidth = window.innerWidth;
//   let pictures;

//   if (screenWidth < 728) {
//     pictures = pictures2;
//   } else if (screenWidth < 1245) {
//     pictures = pictures1;
//   } else {
//     pictures = pictures;
//   }
  
//   // Используйте массив pictures для нужных операций или обновлений
//   console.log(pictures);
// }

// // Добавляем обработчик события resize
// window.addEventListener('resize', handleResize);

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