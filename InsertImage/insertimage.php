<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
      if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
      
        $imgData = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
        $imageProperties = getimageSize($_FILES['fileToUpload']['tmp_name']);
        
        $sql = "INSERT INTO files(imageType ,imageData)	VALUES('{$imageProperties['mime']}', '{$imgData}')";
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    }
    
}

?>