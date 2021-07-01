<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload File</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<label>Title</label>
		<input type="text" name="title">
		<label>File Upload</label>
		<input type="file" name="file">
		<input type="submit" name="submit">
		
	</form>

</body>
</html>

<?php

$localhost="localhost";
$dbusername="root";
$dbpass="";
$dbname="Codekaya";
#connection string
$conn=mysqli_connect($localhost,$dbusername,$dbpass,$dbname);
if (isset($_POST["submit"])) {
	$title=$_POST["title"];
	$file=$_FILES["file"];
	$fileName=$_FILES["file"]["name"];
	$fileTmpName=$_FILES["file"]["tmp_name"];
	$fileSize=$_FILES["file"]["size"];
	$fileError=$_FILES["file"]["error"];
	$fileType=$_FILES["file"]["type"];

	#GET FILE EXTENSION
	$fileExt=explode('.', $fileName);
	#get actual xtension by turning obtained extension to small letters
	$fileActualExt=strtolower(end($fileExt));
	#alowedfil types
	$allowed=array('pdf');

	if(in_array($fileActualExt, $allowed)){
		if($fileError ===0){
			if($fileSize <500000){
				#give file new name before upload to avoid override of files with similar names
				$newFileName=uniqid('', true).".".$fileActualExt;
				#where to upload file
				$fileDestination='uploads/'.$newFileName;
				#upload file
				move_uploaded_file($fileTmpName, $fileDestination);
				#sql query to store file name on the database
				$sql="INSERT INTO fileuploads(Title, File) VALUES ('$title', '$newFileName')";
				#insert into database and check whether it was successful
				if(mysqli_query($conn, $sql)){
					echo("File Uploaded sucessfully");
				}else{
					echo("Error while uploading to database");
				}

			}else{
				echo("Your file is too big");
			}

		}else{
			echo("There was no error uploading the file");
		}

	}else{
		echo("File type not allowed");
	}
	
	#sql query to put into databse
	/*$sql="INSERT INTO fileup(title,image) VALUES ('$title','$fname')";

	if(mysqli_query($conn, $sql)){
		echo("File uploaded successfully");
	}
	else{
		echo("Error");
	}*/
}
?> 