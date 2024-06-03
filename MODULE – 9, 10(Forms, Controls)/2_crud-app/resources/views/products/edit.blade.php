<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $product->name }}"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $product->description }}</textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="{{ $product->price }}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
