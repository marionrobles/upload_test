<?php 

# 1. Load libraries:
 	require_once 'form.lib.php';
 	require_once 'upload.lib.php';
 	require_once 'url.lib.php';

# 2. Logic:

 	//if any files were uploaded:
 	if($_FILES){

 		//get the temp name, and the filename:
 		$tmp      = $_FILES['file']['tmp_name'][0];
 		$filename = $_FILES['file']['name'][0];

 		//move the files into the "uploads" folder:
 		move_uploaded_file($tmp, 'uploads/' .$filename);
 	}

 	//redirect to the newly uploaded file:
 	URL::redirect('uploads/'.$filename);
# 3. Load views (is after this php tag):



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload Files with PHP</title>
</head>
<body>

	<h1>Upload Files with PHP</h1>

	<?= Form::open_upload() ?>
		
		<div class="form-group">
			
			<?= Form::label('file', 'File') ?>
			<?= Form::file() ?>

		</div>

		<?= Form::submit() ?>

	<?= Form::close() ?>
	
</body>
</html>