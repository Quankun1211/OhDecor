const btn = document.querySelectorAll(".qty-btn")
const quantity = document.querySelector(".quantity_num")
const quantityLeft = document.querySelector(".quantity-left")
btn[0].onclick = () => {
  if(quantity.textContent > 0) {
    quantity.textContent--
    console.log(1);
    
  }
}
btn[1].onclick = () => {
  quantity.textContent++
}
console.log(quantityLeft.textContent);
