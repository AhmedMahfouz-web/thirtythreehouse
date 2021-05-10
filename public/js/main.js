let icon = document.getElementById('icon');
let nav = document.getElementById('nav');

const toggleMenu = () => {
    icon.classList.toggle('active');
    if(icon.classList.contains('active')){
        nav.style.left = '0%';
    } else {
        nav.style.left = '-65%'
    }
}

icon.addEventListener('click', toggleMenu);

document.addEventListener('click', function (event) {
    var isClickInside = nav.contains(event.target);
    var isClickedBtn = icon.contains(event.target);
    if (nav.style.left == "0%") {
        if (!isClickInside && !isClickedBtn) {
            toggleMenu()
        }
    }
});

const {slideToggle} = window.domSlider
let services_btn = document.getElementById('services-btn');
let services = document.getElementById('services');
let arrow = document.getElementsByClassName('arrow');

services_btn.addEventListener('click', function(){
    services.classList.toggle('active');
    slideToggle({element: services, slideSpeed: 500})
    if(work.classList.contains('active')){
        work.classList.toggle('active');
        slideToggle({element: work, slideSpeed: 500})
    }
});

let work_btn = document.getElementById('work-btn');
let work = document.getElementById('work');

work_btn.addEventListener('click', function(){
    work.classList.toggle('active');
    slideToggle({element: work, slideSpeed: 500})
    if(services.classList.contains('active')){
        services.classList.toggle('active');
        slideToggle({element: services, slideSpeed: 500})
    }
})

let gridServices = document.querySelectorAll('.grid-services');
let gridWork = document.querySelectorAll('.grid-work');
let nextServices = document.getElementById('next-services');
let prevServices = document.getElementById('prev-services');
let nextWork = document.getElementById('next-work');
let prevWork = document.getElementById('prev-work');

nextServices.addEventListener('click', function(){
    if(!this.classList.contains('disabled') && !this.hasAttribute('disabled')){
        this.classList.add('disabled');
        this.setAttribute('disabled', '');
        prevServices.classList.remove('disabled');
        prevServices.removeAttribute('disabled');
        gridServices.forEach(one => {
            one.style.left = '-217%'; 
         });    }
})

prevServices.addEventListener('click', function(){
    if(!this.classList.contains('disabled') && !this.hasAttribute('disabled')){
        this.classList.add('disabled');
        this.setAttribute('disabled', '');
        nextServices.classList.remove('disabled');
        nextServices.removeAttribute('disabled');
        gridServices.forEach(one => {
           one.style.left = '0%'; 
        });
    }
})

nextWork.addEventListener('click', function(){
    if(!this.classList.contains('disabled') && !this.hasAttribute('disabled')){
        this.classList.add('disabled');
        this.setAttribute('disabled', '');
        prevWork.classList.remove('disabled');
        prevWork.removeAttribute('disabled');
        gridWork.forEach(one => {
            one.style.left = '-217%'; 
         });    }
})

prevWork.addEventListener('click', function(){
    if(!this.classList.contains('disabled') && !this.hasAttribute('disabled')){
        this.classList.add('disabled');
        this.setAttribute('disabled', '');
        nextWork.classList.remove('disabled');
        nextWork.removeAttribute('disabled');
        gridWork.forEach(one => {
           one.style.left = '0%'; 
        });
    }
})