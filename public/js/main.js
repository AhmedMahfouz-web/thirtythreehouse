let icon = document.getElementById('icon');
let nav = document.getElementById('nav');

icon.addEventListener('click', function(){
    this.classList.toggle('active');
    if(this.classList.contains('active')){
        nav.style.left = '0%';
    } else {
        nav.style.left = '-65%'
    }
});

const {slideToggle} = window.domSlider
let services_btn = document.getElementById('services-btn');
let services = document.getElementById('services');
let arrow = document.getElementsByClassName('arrow');

services_btn.addEventListener('click', function(){
    slideToggle({element: services, slideSpeed: 500})
    services.classList.toggle('active');
    if(work.classList.contains('active')){
        slideToggle({element: work, slideSpeed: 500})
        work.classList.toggle('active');
    }
});

let work_btn = document.getElementById('work-btn');
let work = document.getElementById('work');

work_btn.addEventListener('click', function(){
    slideToggle({element: work, slideSpeed: 500})
    work.classList.toggle('active');
    if(services.classList.contains('active')){
        slideToggle({element: services, slideSpeed: 500})
        services.classList.toggle('active');
    }
})