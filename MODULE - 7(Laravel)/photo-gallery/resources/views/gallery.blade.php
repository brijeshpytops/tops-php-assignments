<!DOCTYPE html>
<html>

<head>
    <title>Photo Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-3">Gallery</h1>
    <div class="container text-center">
        @if ($images->isEmpty())
        <p>No images to display.</p>
        @else
        @foreach ($images as $image)
        <img class="border border-dark rounded shadow-lg" src="{{ asset('images/'.$image->filename) }}" width="100" height="100" alt="Image">
        @endforeach
        @endif
    </div>
</body>

</html>