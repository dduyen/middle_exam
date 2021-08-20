<?php include"./header.php"; ?>

<form action="insert_book.php" method="post">
  <div class="form-group">
    <label for="title">Tên</label>
    <input class="form-control" name="name" id="title" type="text">
    
  </div>
  
  <div class="form-group">
    <label for="link">Chức vụ </label>
    <input class="form-control" type="text" name="position" id="position" rows="2">
  </div>
  <div class="form-group">
    <label for="date">Phòng ban</label>
    <input class="form-control" type="text" name="company" id="company" rows="1">
  </div>
  <div class="form-group">
    <label for="status">Email</label>
    <input class="form-control" type="email" name="email" id="email" rows="1">
  </div>
  <div class="form-group">
    <label for="summary">Điện thoại</label>
    <input class="form-control" type="text" name="phone" id="phone" rows="5">
  </div>
  <button type="submit" class="btn btn-primary">Insert</button>
</form>

