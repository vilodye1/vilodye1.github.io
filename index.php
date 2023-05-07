<?php
    include 'header.php';
?>

<div id="home">
    <div class="home-title">
    <div class="title">
            <h1 class="name">PATRICIA BLASCO</h1>
            <p class="sub-title">Web Development & Design</p>
    </div>
    <div class="overlay"></div>
    <video class="video-background" loop muted autoPlay>
        <source src="./uploads/ocean-75701.mp4" type="video/mp4"></source>
    </video>
</div>
<!-- ABOUT SECTION -->
    <div class="about">
        <h2 class="joke"> Why couldn’t the programmer work late into the night?<br><span>
        She didn’t have a LAMP.</span></h2>
        <img class="about-img" src="uploads\20221017_113608.jpg">
        <div class="box-2"></div>
        <div class="white-stripe"></div>
        <div class="about-container">
            <p>After leaving the dog grooming world in 2018, I embarked on a technological adventure to become a master Web Developer.<br><span>There were laughs. There were cries. But 5 years later I have no regrets.</span><br> The entire web building process blew my mind. From design to implementation, I love being a part of every step. My favorite technologies to work with is <strong>LAMP</strong> stack amongst other skills to create beautifully functional and responsive websites/applications. Most of my working experience comes from freelance opportunities collaborating with designers to bring to life personable portfolio websites.</p>
            <br>
            <div class="links">
                <a href="./uploads/PatriciaBlascoResume.pdf" target="_blank" download>View my resume</a>
                <a class="portfolio-link" href="#portfolio-title">View my portfolio</a>
            </div>
        </div>

    </div>

    <div id="portfolio">
        <h2 id="portfolio-title" class="portfolio-title">Current Projects</h2>
        <div class="portfolio-container">
        </div>
        <!-- PROJECTS MOBILE -->
        <div class="project-container project-container-mobile">
                <video src="./uploads/recipeboxvideo2.mp4" class="video-mobile" loop muted autoplay></video>
                <div class="flex-display-mobile textbox">
                    <h2>RecipeBox</h2>
                    <p>A recipe app created using LAMP stack.</p>
                    <a href="recipebox.php">Learn more >></a>
                    <p class="skillset-text-mobile">PHP / MYSQL / JS / HTML / CSS</p>
                </div>
        </div>
        <div class="project-container project-container-mobile">
            <video src="./uploads/graphicvideo1.mp4" class="video-mobile" loop muted autoplay></video>
                <div class="flex-display-mobile textbox">
                    <h2>Graphic Designer Portfolio</h2>
                    <p>A mobile responsive, multi-page portfolio website built based on mock-up designs from the designer himself.</p>
                    <a href="https://yourdesignhubb.com/" target="_blank">Visit site >></a><br><br>
                    <p class="skillset-text-mobile">HTML / CSS / JS / PHP</p>
                </div>
            </div>
            <div class="project-container project-container-mobile">
                <video src="./uploads/clonevideo1.mp4" class="video-mobile" loop muted autoplay></video>
                <div class="flex-display-mobile textbox">
                    <h2>Google Clone</h2>
                    <p>A fun, interactive front-end based challenge replicating Google for desktop and mobile devices.</p>
                    <a href="googleclone.php">Test it out >></a>
                    <p class="skillset-text-mobile">HTML / CSS / JS</p>
                </div>
            </div>
            <div class="project-container project-container-mobile">
            <!-- <video src="./uploads/graphicvideo1.mp4" class="video-right" loop muted autoplay></video> -->
                <div class="flex-display-mobile textbox">
                    <h2>COMING SOON</h2>
                    <p>Magic is happening here.</p>
                </div>
            </div>
            <!-- DESKTOP -->
            <!-- PROJECT 1 -->
            <div data-aos="fade-right" data-aos-duration="1000" class="project-container project-container-left-1">
                <video src="./uploads/recipeboxvideo2.mp4" class="video-left" loop muted autoplay></video>
                <div class="flex-display-left textbox">
                    <h2>RecipeBox</h2>
                    <p>A recipe app created using LAMP stack.</p>
                    <a href="recipebox.php">Learn more >></a>
                    <p class="skillset-text-left-1">PHP / MYSQL / HTML / CSS / JS</p>
                </div>
            </div>
            <!-- PROJECT 2 -->
            <div data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000" class="project-container project-container-right-2">
            <video src="./uploads/graphicvideo1.mp4" class="video-right" loop muted autoplay></video>
            
                <div class="flex-display-right textbox">
                    <h2>Graphic Designer Portfolio</h2>
                    <p>A mobile responsive, multi-page portfolio website built based on mock-up designs from the designer himself.</p>
                    <a href="https://yourdesignhubb.com/" target="_blank">Visit site >></a><br>
                    <p class="skillset-text-right">HTML / CSS / JS / PHP</p>
                </div>
            </div>
            <!-- PROJECT 3 -->
            <div data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000" class="project-container project-container-left-3">
                <video src="./uploads/clonevideo1.mp4" class="video-left" loop muted autoplay></video>
                <div class="flex-display-left textbox">
                    <h2>Google Clone</h2>
                    <p>A fun, interactive front-end based challenge replicating Google for desktop and mobile devices.</p>
                    <a href="googleclone.php">Test it out >></a>
                    <p class="skillset-text-left">HTML / CSS / JS</p>
                </div>
            </div>
            <!-- PROJECT 4 -->
            <div data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000" class="project-container project-container-right-4">
            <!-- <video src="./uploads/graphicvideo1.mp4" class="video-right" loop muted autoplay></video> -->
                <div class="flex-display-right textbox">
                    <h2>COMING SOON</h2>
                    <p>Magic is happening here.</p>
                    <!-- <a href="graphicpage.php">See more >></a> -->
                </div>
            </div>
            <div class="icon-links">
                <a href="https://github.com/vilodye1" target="_blank"><img class="github" src="uploads/github.svg"></a>
            </div>
            <!-- <div class="scallop-up"></div> -->
        </div>
    <!-- CONTACT -->
        <div id="contact">
            <div class="contact-circle">
                <div class="contact-container">
                    <div class="text-circle">
                        <h2>Let's Connect</h2>
                        <div class="icons">
                            <a href="mailto:patriciabee.dev@gmail.com"><img class="email-icon" src="uploads/email.png"></a>
                            <a href="https://www.linkedin.com/in/p-blasco/" target="_blank"><img class="li-icon" src="uploads/linkedin.png"></a>
                            <!-- <a href="#" target="_blank"><img class="ig-icon" src="uploads/insta.png"></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">

        window.addEventListener('scroll', () => {
            document.body.style.setProperty('--scroll', window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
        }, false);

    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<?php
    include 'footer.php';
?>