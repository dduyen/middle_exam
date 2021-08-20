<?php include"./header.php"; ?>

<form action="insert_position.php" method="post">
  <div class="form-group">
    <label for="title">Phòng ban</label>
    <input class="form-control" name="name" id="name" type="text">
    
  </div>
  <div class="form-group">
    <label for="date">Công ty</label>
    <input class="form-control" type="text" name="company" id="company" rows="1">
  </div>
  <button type="submit" class="btn btn-primary">Insert</button>
</form>

