<?php 
$title = "";
require 'includes/head.php';
?>

<img id=cable class="browserElements" src="images/cable.svg" alt="">
<header id="header"> 
    <a href="#aboutMe" id="hiddenAnchor"> </a>
    <?php include 'includes/switches.html' ?>
    <div id="greetWindow">
        <span class="pixel" id="title"> </span>
        <div id="innerGreetWindow">
            <h3 class="sticker" data-text="Céleste's">
                <span class="purpleSpan"> Céleste's </span> </h3>
            <h1 class="sticker" data-text="Portfolio">
                <span class="stickerSpan">Portfolio</span>
            </h1>
            <br>
            <span id="description"> </span>
            <a href="#aboutMe" class="buttonLink"> OK </a>
        </div>
    </div>

</header>
<hr>
<div class="section">
    <div class="sectionTitle" id="aboutMe">
    </div>

    <div class="row">
        <div class="inset">
            <p class="pixel" id="aboutMeMessage"> </p>
        </div>
        <img id="polaroid" src="images/polaroid_frame.png"  alt="My face (hair colors may vary depending on your monitor and my mood)">
    </div>

    <div class="column">
        <p class="mainText" id="aboutMeParagraph0"></p>
        <div class="projectsWindow PWoverride" >
            <div class="windowClose">
                <span class="pixel"> projects.exe</span>
                <div>
                    <span class="close"></span>
                </div>          
            </div>

            <div class="innerWindow">
                <p id="aboutMePopUp"></p>
                <a href="#pick" class="pixel buttonLink" id="PopUpLink"> </a>
            </div>
            
        </div>
        <p class="mainText" id="aboutMeParagraph1"></p>


        <p class="mainText" id="aboutMeParagraph3"> </p>
         <a href="#" target="blank"><img id="pick" src="images/pick.svg" alt="élément décoratif"></a>
    </div>

    <div>
        <p class="mainText jack" id="aboutMeParagraph2"> </p>
    </div>
</div>

<hr>

<div class="portfolioSection" id="projects">
    <a href="projects.php" class="book">
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