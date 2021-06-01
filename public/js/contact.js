const mail = document.getElementById('mail'),
      copied = document.getElementById('copied');

let timer;
      

mail.onclick = function(){
    document.execCommand("copy");
}

mail.addEventListener("copy", function(event) {
    event.preventDefault();
    if (event.clipboardData) {
      event.clipboardData.setData("text/plain", mail.textContent);

      if(timer){
        clearTimeout(timer);
        }
        copied.style.bottom = '10%'
        timer = setTimeout(() => {
            copied.style.bottom = '-100%';
        }, 3000);
        
        }
  });