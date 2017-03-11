

        <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

<div id="header">
    <div class="logo">
        <img src="images/logo.png" alt="Formget logo">
    </div>
</div>



<div class="container bgfixed">
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php/Upload">
  <fieldset>
    <legend>Upload</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ชื่อ</label>
      <div class="col-lg-10">
        <input type="text" class="form-control"  name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">รายละเอียด</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" name="detail" required></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">ประเภท</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" name="type" required>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">รูปภาพ</label>
      <div class="col-lg-10">
			     <input type="file" name="picture" required>
	     </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</div>


</body>
</html>
