<?php 
$title = "";
require 'includes/head.php';
?>

<img id=cable class="browserElements" src="images/cable.svg" alt="">
<header id="header"> 
    <a href="#aboutMe" id="hiddenAnchor"> </a>
    <?php include 'includes/switches.html' ?>
    <div id="greetWindow">
        <span class="pixel" id="title"> Hello and welcome to... </span>
        <div id="innerGreetWindow">
            <h3 class="sticker" data-text="Céleste's" style="margin: 0 -100px 0 0;">
                <span class="purpleSpan"> Céleste's </span> </h3>
                <br>
            <h1 class="sticker" data-text="Portfolio">
                <span class="stickerSpan">Portfolio</span>
            </h1>
            <br>
            <span id="description" > (I'm a web developper btw) </span>
            <a href="#aboutMe" class="buttonLink"> OK </a>
        </div>
    </div>

</header>
<hr>
<div class="section">
    <div class="sectionTitle" id="aboutMe">
    <h2 class='sticker' data-text='About me'> <span class='stickerSpan'> About me </span> </h2>
    </div>

    <div class="row">
        <div class="inset">
            <p class="pixel" id="aboutMeMessage"> > Happy to see you see me ! <br> > </p>
        </div>
        <img id="polaroid" src="images/polaroid_frame.png"  alt="My face (hair colors may vary depending on your monitor and my mood)">
    </div>

    <div class="column">
        <p class="mainText" id="aboutMeParagraph0"> Hi, my name is Céleste Robert, I am a french, twenty-something years old student attending the Access Code School course in Lons-le-Saunier (France), I am learning back and front end web development for desktop and mobile devices. </p>
        <div class="projectsWindow PWoverride" >
            <div class="windowClose">
                <span class="pixel"> projects.exe</span>
                <div>
                    <span class="close"></span>
                </div>          
            </div>

            <div class="innerWindow">
                <p id="aboutMePopUp"> I've had the occasion to work on several web development projects, giving me the opportunity to blablah </p>
                <a href="#pick" class="pixel buttonLink" id="PopUpLink"> OK, SHOW ME THE STUFF! </a>
            </div>
            
        </div>
        <p class="mainText" id="aboutMeParagraph1"> Independant and extremely driven, I am always eager to push the boundaries of my knowledge and I reach my goals more often than not. On the other hand I also know how to take and follow criticism with good faith and an open mind. </p>


        <p class="mainText" id="aboutMeParagraph3"> I basically grew up with the internet so it's fair to say I've always had a huge interest in computers and technologies. I'd also like to make the internet more accessible and inclusive, as well as ecologically responsible. </p>
         <a href="https://www.youtube.com/watch?v=sfsHCXaOHZQ" target="blank"><img id="pick" src="images/pick.svg" alt="élément décoratif"></a>
    </div>

    <div>
        <p class="mainText jack" id="aboutMeParagraph2"> I like art! <br> Especially music, I have been playing drums and bass guitar for quite a few years now and I also enjoy sewing as well as 3D art and animation. </p>
    </div>
</div>

<hr>

<div class="portfolioSection" id="projects">
    <a href="projects" class="book">
        <div class="back">  </div>
        <div class="page6">

             <p> Click here to see my various <br> development works and projects ! </p>
        </div>
        <div class="page5">
        <img src="images/horm.svg" alt="" style="transform: scaleX(-1);"> </div>
        <div class="page4"> </div>
        <div class="page3"> </div>
        <div class="page2"> </div>
        <div class="page1"> </div>
        <div class="front">
            <div class="reliure" id="myProjects">
            </div>
        </div>
    </a>
</div>

<?php include 'includes/footer.php' ?>

<script src="script.js"> </script>

</body>


</html>