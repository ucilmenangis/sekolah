const mulai = document.getElementById("mulai")
const main1 = document.getElementById("main")
const footer = document.querySelector("footer")

mulai.addEventListener('click' , () => {
  main1.style.display = "inherit"
  // footer.style.display = "flex"
})

// --------------------------------
const navbar = document.querySelector('nav')

window.addEventListener('scroll' , () => {
  if(window.scrollY > window.innerHeight * 0.92){
    // navbar.style.background = 'linear-gradient(90deg, rgba(0,36,33,1) 0%, rgba(24,16,88,1) 48%, rgba(9,27,64,1) 100%)'
    navbar.classList.add('nav-box-shadow', 'global-color')
    // navbar.style.boxShadow = 'rgba(0, 0, 0, 0.35) 0px 5px 15px'
  }else{
    // navbar.style.background = 'transparent'
    navbar.classList.remove('nav-box-shadow' , 'global-color')
    // navbar.style.boxShadow = 'none'
  }
})

window.addEventListener('scroll' , () => {
  const sidebar = document.querySelector('.sidebar-center')
  if(window.scrollY > window.innerHeight * 0.395){
    sidebar.style.background = 'linear-gradient(90deg, rgba(0,36,33,1) 0%, rgba(24,16,88,1) 48%, rgba(9,27,64,1) 100%)'
  }else{
    sidebar.style.background = 'transparent'
  }
})