<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload File</title>
</head>
<body>
    <form enctype="multipart/form-data" method="POST"
    action="proses_upload.php">
        <p>pilih file : <input type="file" name="file"></p>
        <input type="submit" name="button" value="upload">
    </form>
    
</body>
</html>