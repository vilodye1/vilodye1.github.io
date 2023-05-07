<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="stylesGoogle.css?v=<?php echo time(); ?>">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b02ee83de2.js" crossorigin="anonymous"></script>
    <title>Google Clone</title>
</head>

<body class="google-desktop">
    <!-- Top navigation -->
    <nav id="topNav">
       <div class="left-nav">
            <a href="#" class="about-link">About</a>
            <p id="google-about">Google Clone is an interactive replica of the Google homepage for Desktop. It is a project created mostly for fun, but also demonstrates accurate element positioning and functionality with an attention to the little details that make the Google homepage. Google Clone was created using HTML, CSS, and JavaScript. Have fun! <br>
            <b>CHALLENGE: Can you find your way back to the homepage?</b>
            </p>
            <a href="https://store.google.com/US?utm_source=hp_header&utm_medium=google_ooo&utm_campaign=GS100042&hl=en-US&pli=1">Store</a>
       </div>
       <div class="right-nav">
            <a href="https://accounts.google.com" target="_blank">Gmail</a>
            <a href="https://www.google.com/imghp?hl=en&ogbl" target="_blank">Images</a>
            <img class="apps-icon" src="https://i.postimg.cc/5th1xjn5/apps-icon.png">
            <a href="https://accounts.google.com" target="_blank"><button class="signin">Sign In</button></a>
       </div>
    </nav>

    <!-- Apps List -->
    <div id="apps">
        <a href="index.php"><i class="fa-solid fa-house"></i></a>
        <a href="https://codepen.io/Vilodye/pen/zYaxdNa" target="_blank"><i class="fa-brands fa-codepen"></i></a>
        <a href="https://github.com/vilodye1" target="_blank"> <i class="fa-brands fa-github"></i></a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1"><i class="fa-solid fa-envelope"></i></a>
        <a href="https://www.linkedin.com/in/p-blasco/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
    </div>

    <!-- Searchbar -->
    <div class="searchbox">
        <!-- Logo -->
        <img id="logo" src="https://i.postimg.cc/xjyY2fHH/logo.png" placeholder="logo">  
        <div class="search">
            <div class="searchbar">
                <div class="search-left"><img class="maglass" src="uploads/maglass.svg"></div>
                <!-- search form -->
                <form action="https://google.com/search">
                    <input class="input" name="q" type="text">
                </form>
                <div class="search-right">
                    <p><img class="icon mic-icon" alt="search by voice" src="https://i.postimg.cc/76S4bDWF/Google-mic-svg.png"></p>
                    <img class="icon" src="https://i.postimg.cc/4y5TbPZw/camera.png">
                </div>
            </div>
            <div class="search-btn">
                <button id="search">Google Search</button>
                <button id="lucky-btn">I'm Feeling Lucky</button>
            </div>
        </div>
    </div>
    <p class="disclaimer">*This project is best viewed in desktop.</p>


    <!-- footer -->

        <div class="footer-links">
        <div class="left-footer">
            <a href="https://ads.google.com/intl/en_us/home/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&utm_source=google.com&utm_medium=referral&utm_campaign=google_hpafooter&fg=1#!/" target="_blank">Advertising</a>
            <a href="https://smallbusiness.withgoogle.com/?subid=us-en-et-g-awa-a-g_hpbfoot1_1!o2&utm_source=google&utm_medium=ep&utm_campaign=google_hpbfooter&utm_content=google_hpbfooter&gmbsrc=us-en_US-et-gs-z-gmb-s-z-u~sb-g4sb_srvcs-u#!/" target="_blank">Business</a>
            <a href="https://www.google.com/search/howsearchworks/?fg=1" target="_blank">How Search works</a>
        </div>
        <div class="center-footer">
            <img class="leaf-icon" src="https://i.postimg.cc/sxyrhqFv/carbon-leaf.png" alt="carbon-leaf">
            <a href="https://sustainability.google/carbon-free/?utm_source=googlehpfooter&utm_medium=housepromos&utm_campaign=bottom-footer&utm_content=#home" target="_blank">Carbon neutral since 2007</a>
        </div>
        <div class="right-footer">
            <a href="https://policies.google.com/privacy?hl=en&fg=1" target="_blank">Privacy</a>
            <a href="https://policies.google.com/terms?hl=en&fg=1" target="_blank">Terms</a>
            <a href="https://www.google.com/preferences?hl=en&fg=1" target="_blank">Settings</a>
        </div>
        </div>
        
        <script type="text/javascript">
            // Google Search
let input = document.querySelector('.input');
const searchBtn = document.getElementById('search');

const search = () => {
   let result = window.open('https://google.com/search?q=' + input.value); 
}

input.addEventListener('change', () => {
    input.textContent = input.value;
});

searchBtn.addEventListener('click', () => {
    search();
});

// I'm Feeling Lucky
const luckyBtn = document.querySelector('#lucky-btn');
const luckySpan = document.querySelector('#lucky');

// I'm Feeling Lucky Links
const imFeeling = [
`<a href="https://www.google.com/search?q=animal+sounds&csf=b&ct=ifl&cad=2:curious&ei=WVhZY9i6HZOKwbkPuJu38Ao&ved=0ahUKEwiYy-3ioP76AhUTRTABHbjNDa4QnRsIEg&rct=j" target="_blank">I'm Feeling Curious</a>`,
`<a href="https://www.google.com/search?q=bat+signal&csf=b&ct=ifl&cad=2:adventurous&ei=clhZY-zmEIekwbkP_patqAE&ved=0ahUKEwjs59buoP76AhUHUjABHX5LCxUQnRsIEg&rct=j" target="_blank">I'm Feeling Adventurous</a>`, 
`<a href="https://www.google.com/search?q=comedy+movies&csf=b&ct=ifl&cad=2:funny&ei=hVhZY7bRCqSPwbkPm6GMgAk&ved=0ahUKEwj2p9j3oP76AhWkRzABHZsQA5AQnRsIEg&rct=j" target="_blank">I'm Feeling Funny</a>`, 
`<a href="https://www.google.com/search?q=pizza+near+me&ct=ifl&cad=2:hungry&ei=mlhZY7D-NJaLwbkPxvi7oAw&ved=0ahUKEwiws4SCof76AhWWRTABHUb8DsQQnRsIEg&rct=j" target="_blank">I'm Feeling Hungry</a>`,
`<a href="https://artsandculture.google.com/partner/the-frick-collection" target="_blank">I'm Feeling Artistic</a>`
];

// shuffle function
const imFeelingShuffle = () => {
    luckyBtn.innerHTML="";
    luckyBtn.classList.add('luckyAnimate');

    // array randomizer
    let randomElement = imFeeling[Math.floor(Math.random() * imFeeling.length)];

    setTimeout(() => {
        luckyBtn.classList.remove('luckyAnimate');
        luckyBtn.innerHTML = `${randomElement}`;
    }, 500);
};

// Event Listeners
luckyBtn.addEventListener('mouseenter', () => {
    imFeelingShuffle();
});

luckyBtn.addEventListener('mouseleave', () => {
    luckyBtn.classList.remove('luckyAnimate');
    luckyBtn.innerText = "I'm Feeling Lucky";
});

// Apps icon window
const appsIcon = document.querySelector('.apps-icon');
const apps = document.querySelector('#apps');

appsIcon.addEventListener('click', () => {

    if(apps.style.display === 'none') {
        apps.style.display = 'block';
    } else {
        apps.style.display = 'none';
    }
});

// about hover
const aboutLink = document.querySelector('.about-link');
const aboutInfo = document.querySelector('#google-about');

aboutLink.addEventListener('mouseenter', () => {
    aboutInfo.style.display = 'block';
});
aboutLink.addEventListener('mouseleave', () => {
    aboutInfo.style.display = 'none';
});

    </script>
</body>
</html>