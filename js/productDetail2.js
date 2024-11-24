const btn = document.querySelectorAll(".qty-btn")
const quantity = document.querySelector(".quantity_num")
const quantityLeft = document.querySelector(".quantity-left")
btn[0].onclick = () => {
  if(quantity.value > 0) {
    btn[1].classList.remove("disable")
    quantity.value--
  }
}
btn[1].onclick = () => {
  if(Number(quantity.value) >= Number(quantityLeft.textContent)) {
    btn[1].classList.add("disable")
  } else {
    quantity.value++
  }
}
quantity.onkeyup = () => {
  if(Number(quantity.value) > Number(quantityLeft.textContent)) {
    quantity.value = quantityLeft.textContent
  } else if (Number(quantity.value) < 0) {
    quantity.value = 1
  } else if (quantity.value[0] == '0') {
    quantity.value = Number(quantity.value)
  }
  
}