const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li')




listItems.forEach(li => {
    li.addEventListener('click', (e) => {
        listItems.classList.remove('onClick');
        e.target.classList.add('onClick');
    })
})