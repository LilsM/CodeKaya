<!DOCTYPE html>
<htm>
    <head>
        <title>This is a sample page for uploading video</title>
    </head>
    <body>
        <form id = "videoform" method="POST" action="mindex.php" enctype="multipart/form-data">
            <h3><Label>Upload Your Video Below</Label></h3><br>
            <Label>Field of expertise</Label>
            <input type = "text" name = "skill" id="skill" required><br><br>
            <label>Video</label>
            <input type = "file" name ="myvid" id = "myvid" required> <br><br>
            <label>Keywords</label>
            <input type="text" name="kwords" id="kwords" required> <br><br>
            <input type="submit" name="sbvid" id="sbvid">
        </form>
    </body>
</htm>