<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
</head>
<body>
    <form action="{{ route('upload.handle') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image">Seleccionar imagen:</label>
        <input type="file" name="image" accept="image/png, image/jpeg, image/gif" required>
        <button type="submit">Subir Imagen</button>
    </form>
</body>
</html>
