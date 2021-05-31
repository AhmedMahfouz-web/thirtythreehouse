let oldPrice = document.getElementById('old-price'),
    currentPrice = document.getElementById('current-price'),
    fCheckBox = document.getElementById('fo'),
    sCheckBox = document.getElementById('so'),
    tCheckBox = document.getElementById('to');

function calc(){
    if(this.checked){
        oldPrice.innerHTML = parseInt(oldPrice.innerHTML) + parseInt(this.getAttribute('price'));
        currentPrice.innerHTML = parseInt(currentPrice.innerHTML) + parseInt(this.getAttribute('price'));
    } else {
        oldPrice.innerHTML = parseInt(oldPrice.innerHTML) - parseInt(this.getAttribute('price'));
        currentPrice.innerHTML = parseInt(currentPrice.innerHTML) - parseInt(this.getAttribute('price'));
    console.log('nothing')
    }

}

fCheckBox.addEventListener('change', calc);
sCheckBox.addEventListener('change', calc);
tCheckBox.addEventListener('change', calc);



const whatsapp = document.getElementById('whatsapp'),
      privacy = document.getElementById('privacy'),
      toast = document.getElementById('toast');

privacy.addEventListener('change', function(){
    if(this.checked){
        whatsapp.classList.add('active');
    } else{
        whatsapp.classList.remove('active');
    }
})

let timer;

whatsapp.addEventListener('click', function(e){
    if(timer){
        clearTimeout(timer);
    }
    if(!this.classList.contains('active')){
        e.preventDefault();
        toast.style.bottom = '10%'
        timer = setTimeout(() => {
            toast.style.bottom = '-100%'
        }, 3000);
    }
})

let privacy_btn = document.getElementsByClassName('blue');
let privacy_section = document.getElementById('privacy-section');
let close_btn = document.getElementsByClassName('close');

for(let i = 0; i < privacy_btn.length; i++){
    privacy_btn[i].addEventListener('click', function(e){
        e.preventDefault()
        privacy_section.classList.add('active');
    })
    close_btn[i].addEventListener('click', function(){
        privacy_section.classList.remove('active');
    })
}
