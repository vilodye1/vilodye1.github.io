const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li')

listItems.forEach(li => {
    console.log(li.innerText);
})