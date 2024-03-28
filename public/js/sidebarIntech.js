const dropWrapper = document.querySelectorAll('.drop-wrapper')
dropWrapper.forEach((element) => {
    const dropElementId = 'drop-container-' + element.getAttribute('id').toString()
    const dropElement = document.getElementById(dropElementId)
    element.addEventListener('click', function () {
        dropElement.classList.toggle('show');
    });
})
// start sidebar
const body = document.querySelector('body'),
sidebar = body.querySelector('nav'),
toggle = body.querySelector(".toggle"),
searchBtn = body.querySelector(".search-box"),
modeSwitch = body.querySelector(".toggle-switch"),
modeText = body.querySelector(".mode-text");
toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})
searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})
modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
    }
});

