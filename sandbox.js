const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li')




listItems.forEach(li => {
    li.addEventListener('click', () => {
        console.log(li.innerText);
    })
})