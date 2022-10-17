// right and left arrows
const rightArrow = document.querySelector("#carousel-1 .right-arrow");
const leftArrow = document.querySelector("#carousel-1 .left-arrow");
// list of all screens in carousel
let screenStore = document.querySelectorAll("#carousel-1 .carousel-screen");
// list of all the circle stores
let circleStore = document.querySelectorAll("#carousel-1 .circle-container .circle");
let carousel = document.getElementById("carousel-1");
// number to target main screen
let currentScreen = 0;
let numOfScreens = screenStore.length;
// animation control
let inAnimation = false;
// animation time
let animationTime = 500;


// sort out starting position
sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
// sort out circle styling
highlightCircle(circleStore[0]);

//User clicks on rightArrow
rightArrow.addEventListener("click", () => {
    startAnim("right");
});

//User clicks on the leftArrow
leftArrow.addEventListener("click", () => {
    startAnim("left");
});

//Start animation
const startAnim = direction => {
    if(!inAnimation) {
        inAnimation = true;
        if(direction === "right") {
            moveRight();
            highlightCircle(circleStore[currentScreen + 1], "right");
        }else if(direction === "left"){
            moveLeft();
            highlightCircle(circleStore[currentScreen - 1], "left");
        }else{
            isAnim = false;
            return
        }
    }
}

//Move to the right
const moveRight = () => {
    //Move towards next screen
    if(currentScreen < numOfScreens - 1){
    toLeft(screenStore[currentScreen]);
    comeRight(screenStore[currentScreen + 1]);
    setTimeout(() => {
        inAnimation = false;
        currentScreen++;
        sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
    }, animationTime)
    }else{
        // move from last to first screen
        toLeft(screenStore[currentScreen]);
        comeRight(screenStore[0]);
        setTimeout(() => {
            inAnimation = false;
            currentScreen = 0;
            sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
        }, animationTime)
    }
}

//Move to the left
const moveLeft = () => {
    //Move back to prev screen
    if(currentScreen > 0){
        toRight(screenStore[currentScreen]);
        comeLeft(screenStore[currentScreen - 1]);
        setTimeout(() => {
        inAnimation = false;
        currentScreen--;
        sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
        }, animationTime)
    }else{
        //Move back to the first screen
        toRight(screenStore[currentScreen]);
        comeLeft(screenStore[numOfScreens - 1]);
        setTimeout(() => {
            inAnimation = false;
            currentScreen = numOfScreens - 1;
            sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
            }, animationTime)
    }
}

//User clicks on one of the circles
circleStore.forEach(circle => {
    circle.addEventListener("click", event => {
        if(!inAnimation){
        //Convert NodeList to Array, to use 'indexOf' method.
        let circleStoreArray = Array.prototype.slice.call(circleStore);
        let circleIndex = circleStoreArray.indexOf(event.target);
        //Configure circle styling
        highlightCircle(event.target);
        //Work out whether we need to move right or left, or nowhere.
        if(circleIndex > currentScreen){
            changeScreenCircleClick(circleIndex, "right");
        }else if (circleIndex < currentScreen){
            changeScreenCircleClick(circleIndex, "left");
        }
    }
})
})

const changeScreenCircleClick = (circleIndex, direction) => {
    inAnimation = true;
    if(direction === "right"){
        sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[circleIndex]);
        toLeft(screenStore[currentScreen]);
        comeRight(screenStore[circleIndex]);
    }else if (direction === "left"){
        sortPositioning(screenStore[currentScreen], screenStore[circleIndex], screenStore[currentScreen + 1]);
        toRight(screenStore[currentScreen]);
        comeLeft(screenStore[circleIndex]);
    }else{
        inAnimation = false;
        return
    }
    setTimeout(() => {
    inAnimation = false;
    currentScreen = circleIndex;
    sortPositioning(screenStore[currentScreen], screenStore[currentScreen - 1], screenStore[currentScreen + 1]);
    }, animationTime)
}

function highlightCircle(circleSelect, direction) {
    if(circleSelect === undefined && direction === "right"){
        circleSelect = circleStore[0];
    }else if (circleSelect === undefined && direction === "left"){
        circleSelect = circleStore[numOfScreens - 1];
    }
    circleStore.forEach(circle => {
        if(circle === circleSelect){
            circle.classList.add("circle-fill");
        }else{
            circle.classList.remove("circle-fill");
        }
    })
}


//Animation methods
const toLeft = screen => {
    screen.style.animation = "toLeft 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime);
}

const toRight = screen => {
    screen.style.animation = "toRight 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime);
}

const comeRight = screen => {
    screen.style.animation = "comeRight 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime);
}

const comeLeft = screen => {
    screen.style.animation = "comeLeft 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime);
}



//Sort positioning so images don't overlap
function sortPositioning(mainScreen, leftScreen, rightScreen) {
    //If right screen is undefined. We need to repeat first screen again
    if(rightScreen === undefined){
        rightScreen = screenStore[0];
    }
    //If left screen is undefined. We use the last screen
    if(leftScreen === undefined){
        leftScreen = screenStore[numOfScreens - 1];
    }
    screenStore.forEach(screen => {
        if(screen === mainScreen){
            screen.style.display = "block";
            screen.style.left = "0px";
        }else if (screen === leftScreen){
            screen.style.display = "block";
            screen.style.left = "-100%";
        }else if (screen === rightScreen){
            screen.style.display = "block";
            screen.style.left = "100%";
        }else{
            screen.style.display = "none";
        }
    })
}

//Auto Scroll feature
let scrollTime = Number(carousel.getAttribute("auto-scroll"));
//Only implement the feature if the user has included the attribute 'auto-scroll'.
if(scrollTime) {
    //Auto Scroll will be set up the very first time
    let autoWipe = setInterval(() => {
        startAnim("right");
    }, scrollTime);
    //Clear the timer when they hover on carousel
    carousel.addEventListener("mouseenter", () => {
        clearInterval(autoWipe);
    });
    //Re-initialise the timer when they hover out of the carousel
    carousel.addEventListener("mouseleave", () => {
         autoWipe = setInterval(() => {
            startAnim("right");
        }, scrollTime);
    })

}

