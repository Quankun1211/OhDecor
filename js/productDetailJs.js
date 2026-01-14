const btn_qnt = document.querySelectorAll(".qty-btn")
const quantity = document.querySelector(".quantity_num")
const quantityLeft = document.querySelector(".quantity-left")
const btnBuy = document.querySelector(".buy_link")
const priceQuantity = document.querySelector(".price_quantity")
const originPrice = priceQuantity.textContent
let tmpPrice = parseInt(originPrice.replace(/\./g, ''), 10); 
let linkPrice = tmpPrice

btn_qnt[0].onclick = () => {
  if(quantity.value > 1) {
    btn_qnt[1].classList.remove("disable")
    quantity.value--
    linkPrice -= tmpPrice
    const formatted = linkPrice.toLocaleString('de-DE')
    btnBuy.href = ""
  }
}
btn_qnt[1].onclick = () => {
  if(Number(quantity.value) >= Number(quantityLeft.textContent)) {
    btn_qnt[1].classList.add("disable")
  } else {
    quantity.value++
    linkPrice += tmpPrice
    const formatted = linkPrice.toLocaleString('de-DE')
    
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
