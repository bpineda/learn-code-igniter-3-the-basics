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
    <tr>
      <td><img src="<?php echo base_url('assets/images/ThinkstockPhotos-145054512.jpg'); ?>" width="150" /></td>  
      <td>4 Bedroom 2 Story House </td>
      <td>Greeley, CO </td>
      <td>Available</td>
      <td>
        <a href="<?php echo site_url('properties/show/1'); ?>" class="button success">View Details</a>
      </td>  
    </tr>

    <tr>
      <td><img src="<?php echo base_url('assets/images/ThinkstockPhotos-160415922.jpg'); ?>" width="150" /></td>  
      <td>Spacious Classic Home</td>
      <td>Loveland, CO </td>
      <td>Available</td>
      <td>
        <a class="button success">View Details</a>
      </td>  
    </tr>

    <tr>
      <td><img src="<?php echo base_url('assets/images/ThinkstockPhotos-179240420.jpg'); ?>" width="150" /></td>  
      <td>3 Bedroom Condo</td>
      <td>Platteville, CO</td>
      <td>Available</td>
      <td>
        <a class="button success">View Details</a>
      </td>  
    </tr>
  </table>
  <br/>
</div>

