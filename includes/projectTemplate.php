    <section id="<?= $project['id_project']?>">
            <div class="mobileProjectHeader">
                <div>
                    <h4><?= $project['title'] ?> </h4>
                </div>
                <div class="techIcons">
                    <?php foreach ($icons as $icon) :
                    if ($icon['id_project'] == $project['id_project']) : ?>
                    <img src="icons/<?=$icon['path']?>" alt="<?=$icon['name']?>" title="<?=$icon['name']?>">
                    <?php endif;
                endforeach; ?>
                </div>
            </div>
        <img src="images/Arrow.svg" alt="" class="arrow">
        <div class="projectsWindow">
            <div class="windowClose">
                <span class="pixel"> <?= $project['title'] ?> </span>
                <div>
                    <span class="close"></span>
                </div>          
            </div>
            <a href="<?= $project['url'] ?>" target="_blank">
            <img srcset="images/<?= $project['image'] ?>400w.png 480w, images/<?= $project['image'] ?>600w.png 600w"
            sizes="(max-width: 600px) 480px, 800px"
            src="images/<?= $project['image'] ?>600w.png"
            alt="Screen capture of <?= $project['title']?>"
            style="width:100%">
            </a>
        </div>
        <div class="pageTemplate">
            <div class="desktopProjectHeader">
                <div>
                    <h4><?= $project['title'] ?> </h4>
                </div>
                <div class="techIcons">
                    <?php foreach ($icons as $icon) :
                    if ($icon['id_project'] == $project['id_project']) : ?>
                    <img src="icons/<?=$icon['path']?>" alt="<?=$icon['name']?>" title="<?=$icon['name']?>">
                    <?php endif;
                endforeach; ?>
                </div>
            </div>
            <div>
                <p class="project_en" ><?= $project['project_en'] ?> </p>
                <p class="project_fr"><?= $project['project_fr'] ?> </p>
                <?php if ($project['github'] != null ) { ?>
                    <a href="<?= $project['github'] ?>" title="Github" target="_blank" > 
                        <div class="octocat">
                            <img src="icons/octocat.png" alt="" id="octo" >
                        </div>
                    </a>
                <?php }  ?>
            </div>
        </div>
    </section>
