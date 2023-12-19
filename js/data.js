const searchInput1 = document.getElementById("search-input-1")
const searchInput2 = document.getElementById("search-input-2")

function showSearch(){
    if(searchInput1.style.display === "flex" || searchInput2.style.display === "flex"){
        searchInput1.style.display = "none"
        searchInput2.style.display = "none"
    }else{
        searchInput1.style.display = "flex"
        searchInput2.style.display = "flex"
    }       
}

const notification = document.getElementById("notification")
const buttonNotification = document.getElementById("buttonNotification")

function clickNotification () {
    notification.classList.toggle("zero-left")
}
// buttonNotification.addEventListener("click", () => {
//     notification.style.right = "200px"
// })

// search1.addEventListener('click',() => {
//     searchInput1.style.display = "flex"
// })