const aboutNav = document.getElementsByClassName('about-nav');
const listItems = document.querySelectorAll('.about-nav-li');
const tabContent = document.querySelectorAll('.tabcontent');

// Tab Toggle
listItems.forEach(li => {
    li.addEventListener('click', (e) => {
        for (i=0; i < listItems.length; i++) {
            listItems[i].className = listItems[i].className.replace("onClick", "");
        }
        e.target.classList.add('onClick');
        if (e.target.classList.includes('onClick')) {
            for (i=0; i < tabContent.length; i++) {
                tabContent[i].className = tabContent[i].className.replace("hidden", "");
            } 
        }
    })

})