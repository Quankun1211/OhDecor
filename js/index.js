const header = document.querySelector('.header')
const btn = document.querySelectorAll(".prod-btn")
const listProd = document.querySelector(".list-prod")
const prodItem = document.querySelectorAll(".prod-item")

window.addEventListener("scroll", (event) => {
  let scroll = this.scrollY;
  if(scroll > 0) {
    header.classList.add('header-js')
  } else if (scroll == 0) {
    header.classList.remove('header-js')
  }
})

let transformValue = 0
let prodLength = prodItem.length
console.log(transformValue);

btn[1].onclick = () => {
  if(prodLength > 1) {
    transformValue -= 424
    listProd.style.transform = `translateX(${transformValue}px)`
    prodLength--
  }
  console.log(transformValue);
  
}
btn[0].onclick = () => {
  if(transformValue < 0) {
    transformValue += 424
    listProd.style.transform = `translateX(${transformValue}px)`
    prodLength++
  }
  console.log(transformValue);

}
