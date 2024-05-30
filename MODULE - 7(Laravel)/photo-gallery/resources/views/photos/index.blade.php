<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Photo Gallery</h1>
<a href="{{ route('photos.create') }}">Upload Photo</a>
<ul>
    @foreach($photos as $photo)
        <li>{{ $photo->title }} <img src="{{ asset('storage/' . $photo->path) }}" width="100"></li>
    @endforeach
</ul>

</body>
</html>