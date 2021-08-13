// let oldPrice = document.getElementById('old-price'),
//     currentPrice = document.getElementById('current-price'),
//     fCheckBox = document.getElementById('fo'),
//     sCheckBox = document.getElementById('so'),
//     tCheckBox = document.getElementById('to');

// function calc() {
//     if (this.checked) {
//         oldPrice.innerHTML = parseInt(oldPrice.innerHTML) + parseInt(this.getAttribute('price'));
//         currentPrice.innerHTML = parseInt(currentPrice.innerHTML) + parseInt(this.getAttribute('price'));
//     } else {
//         oldPrice.innerHTML = parseInt(oldPrice.innerHTML) - parseInt(this.getAttribute('price'));
//         currentPrice.innerHTML = parseInt(currentPrice.innerHTML) - parseInt(this.getAttribute('price'));
//         console.log('nothing')
//     }

// }

// fCheckBox.addEventListener('change', calc);
// sCheckBox.addEventListener('change', calc);
// tCheckBox.addEventListener('change', calc);



const whatsapp = document.getElementById('whatsapp'),
    privacy = document.getElementById('privacy'),
    toast = document.getElementById('toast');

privacy.addEventListener('change', function () {
    if (this.checked) {
        whatsapp.classList.add('active');
    } else {
        whatsapp.classList.remove('active');
    }
})

let timer;

whatsapp.addEventListener('click', function (e) {
    if (timer) {
        clearTimeout(timer);
    }
    if (!this.classList.contains('active')) {
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
let privacy_content = document.getElementsByClassName('privacy-content')[0];

for (let i = 0; i < privacy_btn.length; i++) {
    privacy_btn[i].addEventListener('click', function (e) {
        e.preventDefault()
        privacy_section.classList.add('active');
    })
    close_btn[0].addEventListener('click', function () {
        privacy_section.classList.remove('active');
    })
}


document.addEventListener('click', function (event) {
    let privacy_content_inside = privacy_content.contains(event.target);

    let privacy_section_clicked = privacy_section.contains(event.target);
    if (!privacy_content_inside && privacy_section_clicked) {
        privacy_section.classList.remove('active');
    }
})


let link = "https://wa.me/201033739707";
let checkBoxes = document.getElementsByClassName('check-box');
const serviceName = document.getElementById('offer').getAttribute('data-service');

const updateLink = () => {
    let beginning = 'Hello%20ThirtyThree%20House%0D%0AI%20need%20to%20make%20a%20*' + serviceName + '*';
    let extra = '';
    let message = '';

    for (let i = 0; i < checkBoxes.length; i++) {
        if (checkBoxes[i].checked) {
            extra += checkBoxes[i].getAttribute('value');
        }
    }
    if (extra != null || extra != '') {
        message = beginning + '%20with: %0D%0A' + extra;
    } else {
        message = beginning;
    }


    href = link + '?text=' + message.split('<br>').join('%0D%0A');
    whatsapp.setAttribute('href', href);

}

for (let i = 0; i < checkBoxes.length; i++) {
    checkBoxes[i].addEventListener('change', updateLink);
}
