window.onload = function (){
const menu = document.querySelector(".openMenu")
const products = document.querySelector(".products")

products.addEventListener('mouseover', function(){
  menu.style.display = "flex"
})

products.addEventListener('mouseout', function(){
  menu.style.display = "none"
})
menu.addEventListener('mouseover', function(){
  menu.style.display = "flex"
})

menu.addEventListener('mouseout', function(){
  menu.style.display = "none"
})

}

