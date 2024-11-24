const input = document.querySelectorAll(".input")
const checkSpan = document.querySelectorAll(".check")
const form = document.querySelector(".form-login")
const btn = document.querySelector(".submit")

btn.onclick = (e) => {
  let checkForm = checkInput()
  !checkForm && e.preventDefault()
}

const checkInput = () => {
  let checkForm = true
  input.forEach((item, index) => {
    if(item.value == "") {
      checkSpan[index].classList.add("active")
      checkForm = false
    } else {
      checkSpan[index].classList.remove("active")
    }
  })
  return checkForm
}