function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  document.getElementById("defaultOpen").click();


// const aboutNav = document.getElementsByClassName('about-nav');
// const listItems = document.querySelectorAll('.about-nav-li');
// const para = document.querySelectorAll('.about-me-p');
// // Tab Toggle
// listItems.forEach(li => {
//     li.addEventListener('click', (e) => {
//         for (i=0; i < listItems.length; i++) {
//             listItems[i].className = listItems[i].className.replace("onClick", "");
//         }
//         e.target.classList.add('onClick');
//         if (e.target.classList.contains('onClick')) {
//             para.className.replace("hidden", "active");
//         }


//         // for(i=0; i < para.length; i++) {
//         //     if(para[i].classList.contains('active')) {
//         //       console.log(para[i]);  
//         //     }
            
//         // }
//     })

// })