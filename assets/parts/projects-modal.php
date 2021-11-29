<?php
    $sql = "SELECT * FROM project";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $project_data = $pre->fetchAll(PDO::FETCH_ASSOC);
?>

<div id="modal-projects" class="modal">
    <div class="modal-content">
    
    <h2 class="header center">~ Projects ~</h2>

    <?php foreach($project_data as $project){ ?>
        <div class="col s12 m7">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="<?php echo $project['img_description_1']; ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h3 class="header"><?php echo $project['title_3']; ?></h3>
                        <p><?php echo $project['paragraph_1']; ?></p>
                    </div>
                <div class="card-action">
                    <a href="projects.php?id=<?php echo $project['project_id']?>">See Projects</a>
                </div>
            </div>
        </div>
        </div>
    <?php } ?>

    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>
