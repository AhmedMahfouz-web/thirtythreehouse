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

