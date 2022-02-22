<?php foreach($projects as $project) : ?> 
    <section>
        <div class="projectsWindow">
            <div class="windowClose">
                <span class="pixel"> <?= $project['title'] ?> </span>
                <div>
                    <span class="close"></span>
                </div>          
            </div>
            <a href="<?= $project['url'] ?>">
                <img src="images/<?= $project['image'] ?> " alt="">
            </a>
        </div>
        <div class="pageTemplate">
            <div>
                <h4><?= $project['title'] ?></h4>
            </div>
            <div class="techIcons">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/symfony-logo-png-transparent.png" style="width:45px; height: 45px;" alt="">
                <img src="https://sass-lang.com/assets/img/styleguide/seal-color-reversed-c50d9b78.png" style="width:45px; height: 45px;" alt="">
            </div>
            <img src="images/Arrow.svg" alt="" class="arrow">
            <div>
                <p class="" ><?= $project['project_en'] ?> </p>
                <p class="" style="display: none;"><?= $project['project_fr'] ?> </p>
                <?php if ($project['github'] != null ) { ?>
                    <a href="https://github.com/Plumtree3D/<?= $project['github'] ?>" target="_blank" > 
                        <div class="octocat">
                            <img src="icons/octocat.png" alt="" id="octo" >
                        </div>
                    </a>
                <?php }  ?>
            </div>
        </div>
        
  




    </section>



<?php endforeach; ?>