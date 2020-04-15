<!DOCTYPE html>
<html>

<body>
<form action = "upload.php" enctype ="multipart/form-data" method="post">
 <input type = "file" name="fileName"/>
 <input type = "submit" value="Upload"/>
 </form>
<?php
 if($_FILES){
	 $name = $_FILES['fileName']['name'];
	 move_uploaded_file( $_FILES['fileName']['tmp_name'], $name);
     echo"<img src = ' $name'/>";
 }
?>
</body>
</html>