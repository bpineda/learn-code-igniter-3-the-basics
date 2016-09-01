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
      <?php if( form_error('name') ){ ?>
      <div class="callout alert"><?php echo form_error('name'); ?></div>
      <?php } ?>
      <label>Description</label>
      <textarea name="description"><?php echo $property['description'] ?></textarea>
      <?php if( form_error('description') ){ ?>
      <div class="callout alert"><?php echo form_error('description'); ?></div>
      <?php } ?>
      <input type="file" name="image_file" />

      <label>Street and Number</label>
      <input type="text" name="street" value="<?php echo $property['street'] ?>" />
      <?php if( form_error('street') ){ ?>
      <div class="callout alert"><?php echo form_error('street'); ?></div>
      <?php } ?>

      <label>City</label>
      <input type="text" name="city" value="<?php echo $property['city'] ?>" />
      <?php if( form_error('city') ){ ?>
      <div class="callout alert"><?php echo form_error('city'); ?></div>
      <?php } ?>

      <label>State</label>
      <input type="text" name="state" value="<?php echo $property['state'] ?>" />
      <?php if( form_error('state') ){ ?>
      <div class="callout alert"><?php echo form_error('state'); ?></div>
      <?php } ?>

      <label>Zip code</label>
      <input type="text" name="zip_code" value="<?php echo $property['zip_code'] ?>" />
      <?php if( form_error('zip_code') ){ ?>
      <div class="callout alert"><?php echo form_error('zip_code'); ?></div>
      <?php } ?>

      <label>Latitude</label>
      <input type="text" name="latitude" value="<?php echo $property['latitude'] ?>" />
      <?php if( form_error('latitude') ){ ?>
      <div class="callout alert"><?php echo form_error('latitude'); ?></div>
      <?php } ?>

      <label>Longitude</label>
      <input type="text" name="longitude" value="<?php echo $property['longitude'] ?>" />
      <?php if( form_error('longitude') ){ ?>
      <div class="callout alert"><?php echo form_error('longitude'); ?></div>
      <?php } ?>

      <label>Agent</label>
      <select name="agents_id">
      <?php foreach( $agents as $id => $agent ){ ?>
        <option value="<?php echo $id; ?>"><?php echo $agent ?></option>
      <?php } ?>
      </select>

      <label>Status</label>
      <select name="status_id">
      <?php foreach( $statuses as $id => $status ){ ?>
        <option value="<?php echo $id; ?>"><?php echo $status ?></option>
      <?php } ?>
      </select>

      <input class="button success" type="submit" value="SAVE" /> 
    </form>
    </div>
  <br/>
</div>

