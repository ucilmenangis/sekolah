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

// search1.addEventListener('click',() => {
//     searchInput1.style.display = "flex"
// })