<?php
    include 'header.php';
    include 'navbar.php';
?>
                            <div id="modal" class="modal">
                                <p class="close-modal">X</p>
                                <!-- <p class="next">></p>
                                <p class="prev"><</p> -->
                                <img class="modal-imgs modal-img1" src="uploads/ui1.png" alt="mobile-homepage">
                                <img class="modal-imgs modal-img2" src="uploads/ui2.png">
                                <img class="modal-imgs modal-img3" src="uploads/ui3.png">
                                <img class="modal-imgs modal-img4" src="uploads/ui4.png">
                                <img class="modal-imgs modal-img5" src="uploads/ui5.png">
                                <img class="modal-imgs modal-img6" src="uploads/ui6.png">
                                <img class="modal-imgs modal-img7" src="uploads/ui7.png">
                                <img class="modal-imgs modal-img8" src="uploads/ui8.png">
                                <div id="caption"></div>
                            </div>
<div class="recipebox-header">
<h1>RecipeBox</h1>
<div class="recipebox-desc-container">
    <p>A full-stack recipe management application that allows users to create a personalized cookbook that they can store, share, edit, and delete favorite family recipes without the hassle of overcomplicated UI.</p>
</div>
</div>
<div class="recipebox-body">
    <ul class="specs-list">
        <li>Linux</li>
        <li>Apache</li>
        <li>MySQL</li>
        <li>PHP</li>
        <li>JAVASCRIPT</li>
        <li>CSS3</li>
        <li>HTML5</li>
    </ul>
<!-- DARK SPACE -->
    <div class="feature-login">
        <div class="objective-section">
            <h2 class="recipebox-title-dark">Objective</h2>
            <p class="objective-text">RecipeBox is an ongoing project that has been recreated many times throughout my code journey with a vision to provide users with a way to connect with their loved ones through sharing their most cherished heirloom recipes with whoever they choose. Oftentimes, folks don't want to share their best recipes with the whole world, yet in a world that visits their loved ones online often, I wanted to create a space that was usable for everyone, young and old, even those who are not great with technology. Think Facebook but exclusively for sharing recipes.</p>
        </div>
        <h2 class="recipebox-title-dark">Features</h2>
        <div class="accordian-container">
            <!-- LOGIN SYSTEM -->
            <div class="accordian-section">
                <button class="accordian-tab">Signup/Login System</button>
                    <div class="accordian-panel">
                        <div class="login-media">
                            <img class="login-img" src="uploads/recipe-signup-mobile.png">
                            <video src="uploads/recipebox-login4.mp4" loop muted autoplay></video>
                        </div>
                        <ul class="points">
                            <li>Users sign up to create their own digital recipe box.</li>
                            <li>Usernames and Email Addresses cannot be repeated.</li>
                            <li>Created using procedural PHP methods.</li>
                            <li>Uses password hashing function for password security.</li>
                        </ul>
                    </div>
            </div>
            <!-- MYSQL -->
            <div class="accordian-section">
                <button class="accordian-tab">Complete use of MySQL Management System</button>
                    <div class="accordian-panel">
                    <div class=" login-media mysql-media">
                        <img src="uploads/mysql3.png">
                    </div>
                    <ul class="points">
                    <li>Users, full recipes, and Top 6 recipes are stored in mySQL database.</li>
                    <li>Recipes are filtered by user.</li>
                    <li>Features in RecipeBox allows users to create, edit, and delete their recipes stored in Database.</li>
                </ul>
                </div>
            </div>
            <!-- JAVASCRIPT FEATURES -->
            <div class="accordian-section">
                <button class="accordian-tab">JavaScript Features</button>
                    <div class="accordian-panel">
                        <div class="search-media">
                            <div class="search-flex">
                                <video src="uploads/search2.mp4" loop muted autoplay></video>
                                <div class="search-text">
                                    <h3>Search Engine</h3>
                                    <p>Search function filters all recipes in MySQL database only created on user's account.</p>
                                </div>
                            </div>
                                <br>
                            <div class="search-flex">
                                <div class="search-text">
                                    <h3>Light/Dark Mode</h3>
                                    <p>Simply made function that is effective across all pages in application.</p>
                                </div>
                                <video src="uploads/lightdark3.mp4" loop muted autoplay></video>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- PURE CSS UI DESIGN -->
<!-- use modal for picture close-ups -->
            <div class="accordian-section">
                <button class="accordian-tab">Pure CSS UI Design</button>
                    <div class="accordian-panel">
                        <div class=" login-media css-media">
                            <div>
                                <img class="thumbnail thumbnail1" src="uploads/ui1_thumbnail.png" alt="mobile homepage">
                                <img class="thumbnail thumbnail2" src="uploads/ui2_thumbnail.png" alt="mobile new recipe form">
                                <img class="thumbnail thumbnail3" src="uploads/ui3_thumbnail.png" alt="mobile edit recipe form">
                                <img class="thumbnail thumbnail4" src="uploads/ui4_thumbnail.png" alt="mobile recipe page">
                            </div>
                            <div>
                                <img class="thumbnail thumbnail5" src="uploads/ui5_thumbnail.png" alt="desktop homepage">
                                <img class="thumbnail thumbnail6" src="uploads/ui6_thumbnail.png" alt="desktop saved recipes">
                                <img class="thumbnail thumbnail7" src="uploads/ui7_thumbnail.png" alt="desktop edit top 6">
                                <img class="thumbnail thumbnail8" src="uploads/ui8_thumbnail.png" alt="desktop recipe page">
                            </div>
                        </div>
                        <ul class="points">
                            <li>All layouts and forms designed from scratch with CSS.</li>
                            <li>Mobile responsive design.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="recipebox-links">
                <a href="https://github.com/vilodye1/RecipeBox" target="_blank"><img src="uploads/github-recipe.svg"><br>View on Github</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // for accordian feature
    const button = document.getElementsByClassName('accordian-tab');
    const panel = button.nextElementSibling;

    const array = Array.from(button);
    array.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('active');

            const panel = btn.nextElementSibling;
            if (panel.style.display === "block") {
            panel.style.display = "none";
            panel.style.maxHeight = null;
            } else {
            panel.style.display = "block";
            panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });

    // CSS IMAGE GALLERY THUMBNAILS
    const thumbnail1 = document.querySelector('.thumbnail1');
    const thumbnail2 = document.querySelector('.thumbnail2');
    const thumbnail3 = document.querySelector('.thumbnail3');
    const thumbnail4 = document.querySelector('.thumbnail4');
    const thumbnail5 = document.querySelector('.thumbnail5');
    const thumbnail6 = document.querySelector('.thumbnail6');
    const thumbnail7 = document.querySelector('.thumbnail7');
    const thumbnail8 = document.querySelector('.thumbnail8');

    // CSS IMAGE GALLERY FULL SIZE IMAGES
    const img1 = document.querySelector('.modal-img1');
    const img2 = document.querySelector('.modal-img2');
    const img3 = document.querySelector('.modal-img3');
    const img4 = document.querySelector('.modal-img4');
    const img5 = document.querySelector('.modal-img5');
    const img6 = document.querySelector('.modal-img6');
    const img7 = document.querySelector('.modal-img7');
    const img8 = document.querySelector('.modal-img8');

    // ALL IMAGES
    const img = document.getElementsByTagName('img');
    const thumbnails = document.getElementsByClassName('thumbnail');

    // MODAL AND MODAL BUTTONS
    const modal = document.getElementById("modal");
    const closeModal = document.querySelector('.close-modal');
    const captionText = document.getElementById('caption');
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');

    // CLICK EVENTS FOR EACH THUMBNAIL
    const thumbnailArray = Array.from(thumbnails);

    thumbnail1.onclick = () => {
        img1.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail1.alt;
    }
    thumbnail2.onclick = () => {
        img2.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail2.alt;
    }
    thumbnail3.onclick = () => {
        img3.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail3.alt;
    }
    thumbnail4.onclick = () => {
        img4.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail4.alt;
    }
    thumbnail5.onclick = () => {
        img5.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail5.alt;
    }
    thumbnail6.onclick = () => {
        img6.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail6.alt;
    }
    thumbnail7.onclick = () => {
        img7.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail7.alt;
    }
    thumbnail8.onclick = () => {
        img8.classList.add('active-img');
        modal.style.display = "block";
        captionText.innerHTML = thumbnail8.alt;
    }

  const imgArray = Array.from(img);

// CLOSE MODAL
closeModal.onclick = () => {
  modal.style.display = "none";

  imgArray.forEach((img) => {
    img.classList.remove('active-img');
  })

}

// NEXT MODAL
next.onclick = () => {
    imgArray.forEach(img => {
        if(img.classList.contains('active-img')) {
            img.classList.remove('active-img');
            img.nextElementSibling.classList.add('.active-img');
        }
    });
}


</script>
<footer class="footer">
    <p>Patricia Blasco|<span> Portfolio 2022</span></p>
    <a href="#navbar"><img src="uploads/smallbacktotop.png"></a>
</footer>

</body>
</html>