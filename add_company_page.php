<?php include"./header.php"; ?>

<form action="insert_company.php" method="post">
  <div class="form-group">
    <label for="title">Công ty</label>
    <input class="form-control" name="name" id="name" type="text">
    
  </div>
  <div class="form-group">
    <label for="office">Văn phòng</label>
    <input class="form-control" type="text" name="office" id="office" rows="1">
  </div>
  <button type="submit" class="btn btn-primary">Insert</button>
</form>

