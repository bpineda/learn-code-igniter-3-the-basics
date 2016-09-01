<div>
  <div class="row column text-center">
  </div>
</div>
<hr>

<div class="row column">
  <h3>Edit details</h3>
  <div class="row column text-left">
    <!--<form method="post">-->
    <?php echo form_open_multipart(''); ?>
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $property['name'] ?>" />
      <label>Description</label>
      <textarea name="description"><?php echo $property['description'] ?></textarea>
      <input type="file" name="image_file" />
      <input class="button success" type="submit" value="SAVE" /> 
    </form>
    </div>
  <br/>
</div>

