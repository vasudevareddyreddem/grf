<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/su//dist/summernote.css">
  <title>summernote</title>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <script type="text/javascript" src="http://localhost/su/dist/summernote.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote({
        height: 300,
        tabsize: 2
      });
    });
  </script>
</head>
<body>
  <div class="container">
    <h4> <i class="note-icon-summernote"></i> Summernote
      <span class="label label-info">Bootstrap v3.3.7</span>
      <span class="label label-success">with Summernote Icons</span>
    </h4>
	<form action="" method="post" enctype="multipart/form-data">
	<textarea rows="20" name="details" class="summernote"></textarea>
	<input  type="submit" value="add">
	</form>
  </div>
</body>
</html>

<?php echo '<pre>';print_r($_FILES);
echo '<pre>';print_r($_POST);

exit;

?>
