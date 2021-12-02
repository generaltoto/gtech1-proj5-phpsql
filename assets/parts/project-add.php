<?php
  $sql = "SELECT * FROM project"; 
  $pre = $pdo->prepare($sql); 
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
?>

<!-- Modal Project Add -->
<div id="modal-add-project" class="modal">
  <div class="modal-content">
    <section class="section container">
      <h2>Create Your Own Project !</h2>
      <form class="col s12" action="config/add_project.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <?php foreach($data[0] as $projectKey => $projectInfos){
          if(isImage($projectInfos) == true){ ?>
            <div class="row">
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name=<?php echo $projectKey ?>>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name=<?php echo $projectKey ?> placeholder=<?php echo "'$projectKey'" ?>>
                </div>
              </div>
            </div>
        <?php } else { ?>
              <div class="row">
                <div class="input-field col s12">
                  <label for="name"><?php echo $projectKey ?></label>
                  <textarea id="textarea1" class="materialize-textarea" name="<?php echo $projectKey; ?>"></textarea>
                </div>
              </div>
        <?php } 
        } ?>
      </div>
      <div class="row">
        <button type="submit" class="btn-large right green">SAVE</button>
      </div>
      </form>
    </section>
  </div>
  <div class="modal-footer">

  </div>
</div>