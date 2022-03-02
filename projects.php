<?php 
$title = "My Projects -";
require 'includes/head.php';
require 'includes/db.php';
?>


<?php include 'includes/switches.html' ?>

<div class="bookmark">
    <span> Works</span>
    <ul>
        <?php foreach($projects as $project) :
            if($project['category'] == 'work') { 
        ?> 
        <li><a href="#<?=$project['id_project'] ?>" > <?= $project['title']; ?> </a> </li> 
        <?php
        } endforeach;
        ?>
    </ul>
    <span> School </span>
    <ul>
        <?php foreach($projects as $project) :
            if($project['category'] == 'school') {
        ?> 
        <li><a href="#<?=$project['id_project'] ?>" > <?= $project['title']; ?> </a> </li>
        <?php
        } endforeach;
        ?>
    </ul>
    <span> Misc </span>
    <ul>
        <?php foreach($projects as $project) : 
            if($project['category'] == 'misc') {
        ?> 
        <li><a href="#<?=$project['id_project'] ?>" > <?= $project['title']; ?> </a> </li> 
        <?php
        } endforeach;
        ?>
    </ul>
</div>

<a class="goBack" href="/"> <img src="images/back.png" alt="Go to homepage"></a>
<div class="sectionTitle" id="myProjects"> </div>

<div class="sectionTitle" id="works"> </div>
<div class="alternate">
<?php foreach($projects as $project) :
    if($project['category'] == 'work') {
    include 'includes/projectTemplate.php';
} endforeach; ?>
</div>

<div class="sectionTitle" id="school"> </div>
<div class="alternate">
<?php foreach($projects as $project) :
    if($project['category'] == 'school') {
    include 'includes/projectTemplate.php';
} endforeach; ?>
</div>

<div class="sectionTitle" id="misc"> </div>
<div class="alternate">
<?php foreach($projects as $project) :
    if($project['category'] == 'misc') {
    include 'includes/projectTemplate.php';
} endforeach; ?>
</div>

<?php include 'includes/footer.php' ?>

<script src="script.js"> </script>

</body>


</html>