<div>
  <div class="row column text-center">
    <h2>Welcome, <?php echo $user_name; ?></h2>
    <select>
        <?php foreach($status_group as $status){ ?>
          <option><?php echo $status; ?></option>
          <?php } ?>
    </select>
  </div>
</div>
<hr>

<div class="row column">
  <h3>Properties details</h3>
  <table border="0">
    <tr>
      <td>IMAGE</td>
      <td>NAME</td>
      <td>LOCATION</td>
      <td>STATUS</td>  
      <td>ACTION</td>  
    </tr>
    <?php foreach($properties as $property){ ?>
    <tr>
      <td><img src="<?php echo base_url("assets/images/{$property['image']}"); ?>" width="150" /></td>  
      <td><?php echo $property['name'] ?></td>
      <td><?php echo $property['city'] ?>, <?php echo $property['state'] ?> </td>
      <td>Available</td>
      <td>
        <a href="<?php echo site_url('properties/show/' . $property['id']); ?>" class="button success">View Details</a>
        <a href="<?php echo site_url('properties/edit/' . $property['id']); ?>" class="button">Edit Details</a>
      </td>  
    </tr>
    <?php } ?>
  </table>
  <br/>
</div>

