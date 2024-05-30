<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Upload Photo</h1>
<form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
    <label for="photo">Photo:</label>
    <input type="file" id="photo" name="photo" required>
    <button type="submit">Upload</button>
</form>

</body>
</html>