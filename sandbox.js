const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li')

// Tab Toggle
listItems.forEach(li => {
    li.addEventListener('click', (e) => {
        for (i=0; i < listItems.length; i++) {
            listItems[i].className = listItems[i].className.replace("onClick", "");
        }
        e.target.classList.add('onClick');
        e.target.classList.replace('hidden', "");
    })

})