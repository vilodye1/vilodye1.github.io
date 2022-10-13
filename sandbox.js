const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li')




listItems.forEach(li => {
    li.addEventListener('click', (e) => {
        e.target.classList.add('onClick');
    })
})