const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li')




listItems.forEach(li => {
    li.addEventListener('click', (li) => {
        if (!li.classList.includes('onClick')) {
            li.classList.add('onClick')
        }
        console.log(li.innerText);
    })
})