const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li');
const para = document.querySelectorAll('.about-me-p');
// Tab Toggle
listItems.forEach(li => {
    li.addEventListener('click', (e) => {
        for (i=0; i < listItems.length; i++) {
            listItems[i].className = listItems[i].className.replace("onClick", "");
        }
        e.target.classList.add('onClick');

        for(i=0; i < para.length; i++) {
            if(para[i].classList.contains('active')) {
              console.log(para[i]);  
            }
            
        }
    })

})