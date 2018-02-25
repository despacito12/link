<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample Basic CRUD App II-IT E</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

  <?php

    include('dbconnect.php');
    $entry_no = $_GET['entry_no'];
    $query = "SELECT * FROM info WHERE entry_no='$entry_no'";

    $result = mysqli_query($conn, $query); 


  ?>
  <div class="container bg-success" style="padding-top:30px;padding-bottom:30px">
  <h3>PHP with MySQL CRUD App</h3>
  <br>
  <hr>
  <h4>Edit Records Form</h4> 
  <hr>
  <br>

  <div class="row">
  <div class="col-sm-4">

  <form role="form" class="form-horizontal" action="editrecord.php" method="get">

  <?php

  while ($row = mysqli_fetch_assoc($result)) {

  ?>
  <input type="hidden" name="entry_no" class="form-control" value="<?php echo $row['entry_no']; ?>">
  <div class="form-group">
  <label for="brand" class="col-sm-3 control-label">Brand</label>
  <div class="col-sm-9">
  <select class="form-control" name="brand">
  <option><?php echo $row['brand']; ?></option>
  <option>Apple</option>
  <option>Samsung</option>
  <option>SKK Mobile</option>
  <option>Cherry Mobile</option>
  <option>Oppo</option>
  <option>Nokia</option>
  </select>
  </div>
  </div>

  <div class="form-group">
  <label for="model" class="col-sm-3 control-label">Model</label>
  <div class="col-sm-9">
  <input type="text" name="model" class="form-control" value="<?php echo $row['model']; ?>">
  </div>
  </div> 


  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
  Change Record
</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirm Change Record?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel and Close</button>
        <button type="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

  </div>
  </div>
  <?php
  }
  mysqli_close($conn);

  ?>
  </form>
  </body>
  </html>