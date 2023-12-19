const navMenuButton = document.getElementById('nav-button')
const navMenu = document.getElementById('nav-res')

let trueOrNot = false
navMenuButton.addEventListener('click',() => {
    if(!trueOrNot){
        navMenu.classList.add('nav-right')
        trueOrNot = true
    }else{  
        navMenu.classList.remove('nav-right')
        trueOrNot = false
    }
})

const notification = document.getElementById("notification")
const buttonNotification = document.getElementById("buttonNotification")

function clickNotification () {
    notification.classList.toggle("zero-left")
}