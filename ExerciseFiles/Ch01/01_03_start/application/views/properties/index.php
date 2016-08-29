<div>
  <div class="row column text-center">
    <h2>Welcome, <?php echo $user_name ?></h2>
    <select>
        <?php foreach ($status_group as $status) { ?>
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
      <td><img src="https://s-media-cache-ak0.pinimg.com/736x/66/3c/25/663c2510e0d56d893a48030a2108f0b0.jpg" width="150" /></td>  
      <td>Heffner Mansion</td>
      <td>Hamptons, New York</td>
      <td>Available</td>
      <td>
        <a class="button success">View Details</a>
      </td>  
    </tr>

    <tr>
      <td><img src="https://elevateliving.com/images/mansions-at-jordan-creek/community-photos/large/mjc-0421.jpg" width="150" /></td>  
      <td>Mosby Mansion </td>
      <td>Carpinteria, California</td>
      <td>Available</td>
      <td>
        <a class="button success">View Details</a>
      </td>  
    </tr>

    <tr>
      <td><img src="http://cdn.pursuitist.com/wp-content/uploads/2015/05/Mean_girls_Mansion_Toronto_main-e1432549364859.jpeg" width="150" /></td>  
      <td>The NBA mansion</td>
      <td>Chicago, Illinois</td>
      <td>Available</td>
      <td>
        <a class="button success">View Details</a>
      </td>  
    </tr>
  </table>
  <br/>
</div>

