<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
    
     
  </style>
</head>
<body>
    <?php include "./header.php" ?>
<h4 class="text-center mt-3" style="margin-top:5%;"> News</h4>
      <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group mr-2" role="group" aria-label="First group">
              <button type="button" class="btn btn-warning mb-3">Add</button>
          </div>
      </div>
      <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Function</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">2</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>
                    <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-warning">Insert</button>
                      </div>
                      <div class="btn-group mr-2" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-warning">Delete</button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Four group">
                        <button type="button" class="btn btn-warning">Update</button>
                      </div>
                    </div>
                  </td>
            </tr>
            <tr>
              <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>
                    <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
                      <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-warning">Insert</button>
                      </div>
                      <div class="btn-group mr-2" role="group" aria-label="Third group">
                        <button type="button" class="btn btn-warning">Delete</button>
                      </div>
                      <div class="btn-group" role="group" aria-label="Four group">
                        <button type="button" class="btn btn-warning">Update</button>
                      </div>
                    </div>
                  </td>
            </tr>
          </tbody>
      </table>
    </div>
   
</body>
</html>