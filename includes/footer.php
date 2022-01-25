<hr>

<div class="sectionTitle" id="getInTouch"></div>

<footer>
    <div class="contactForm">
        <form method="GET" action="#">
            <p id="contact">  </p>
            <input type="text" name="nom" required id="name" placeholder="Your name..." value="<?php if(isset($_GET['nom'])) { echo $_GET['nom']; } ?>">
            <input type="email" name="mail" id="email" placeholder="Email adress here..." value="<?php if(isset($_GET['mail'])) { echo $_GET['mail']; } ?>" />
            <textarea id="subject" name="message" placeholder="Write something nice..."><?php if(isset($_GET['message'])) { echo $_GET['message']; }?></textarea>
            <input type="submit" name="mailform" value="Send ?">
            <?php echo $msg=""; ?>


            <?php
        if(isset($_GET['mailform'])) {
        if(!empty($_GET['nom']) && !empty($_GET['mail']) && !empty($_GET['message'])) {
            $header="MIME-Version: 1.0\r\n";
            $header.='From:'.$_GET['nom']."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';
            $message='
            <html>
                <body>
                    <div align="center">
                
                    <u>Nom de l\'expéditeur :</u>'.$_GET['nom'].'<br />
                    <u>Mail de l\'expéditeur :</u>'.$_GET['mail'].'<br />
                    <br />
                    '.nl2br($_GET['message']).'
                
                    </div>
                </body>
            </html>
            ';
            mail("ham.in.kneesocks@gmail.com", "Sujet du message", $message, $header);
            echo "<div class='pixel'> Roger roger, I got you 5/5 ! </div>";
           // header("Refresh: 5; https://ilanr.promo-93.codeur.online/portfolio/");
        } else {
            echo " <div class='pixel'> Something went wrong! Please try again. </div> ";
        }
        }
?>

        </form>


    </div>

    <img src="images/enveloppelower.svg" alt="" id="calque" class="enveloppe browserElements">
    <img src="images/enveloppeupper.svg" alt="" class="enveloppe browserElements">

    <div class="mediaButtons">
        <span id="githubTxt"></span>
        <a id="github" href="https://github.com/Plumtree3D" target="blank"><img src="images/github.svg"
                alt="Link to my GitHub"></a>
        <span id="linkedinTxt"> </span>
        <a id="linkedin" href="https://www.linkedin.com/in/c%C3%A9leste-robert-casals/" target="blank"><img
                src="images/linkedin.svg" alt="Link to my LinkedIn"></a>
        <img id="imgButton" src="images/button.svg" alt="éléments décoratifs" width="300">

        <a id="privacy" href="privacy.php"> </a>

    </div>


</footer>