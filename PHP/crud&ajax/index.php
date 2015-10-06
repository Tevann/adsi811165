<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD (php - mysql - ajax)</title>
  <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>

  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="page-header">
          <h1>CRUD <small>(php - mysql - ajax)</small></h1>
        </div>
        <button type="button" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Usuarios</button>
          <br><br>
        <table class="table table-striped table-bordered table-hover">
              <thead class="text-uppercase al-center">
                  <th class="text-center">Id</th>
                  <th class="text-center">Firstanames</th>
                  <th class="text-center">LastNames</th>
                  <th class="text-center">Actions</th>
              </thead>
              <tbody id="lstUsers">

              </tbody>
        </table>
    </div>
    <div class="col-md-3"></div>
  </div>

  <script src="public/js/jquery-1.11.3.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/app.js"></script>
</body>
</html>
