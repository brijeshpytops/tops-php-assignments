<!DOCTYPE html>
<html>
<head>
    <title>Admin - Photo Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-3">Admin Panel</h1>
        <form class="mb-3" action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control mb-3" name="image" id="image">
            </div>
            <button type="submit" class="btn btn-dark">Upload</button>
        </form>
    
        @if ($message = Session::get('success'))
            <div class="mb-3">
                <strong>{{ $message }}</strong>
            </div>
        @endif
    
        <h2 class="mb-3">All Images</h2>
        <div class="mb-3">
            @if ($images->isEmpty())
                <p>No images uploaded yet.</p>
            @else
                @foreach ($images as $image)
                    <img class="border border-dark rounded shadow-lg" src="{{ asset('images/'.$image->filename) }}" width="100" height="100" alt="Image">
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>
