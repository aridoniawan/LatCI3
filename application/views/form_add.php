<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Tambah Artikel</h1>
    <form method="POST">
        <div>
            <label for="">Judul: </label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">Url: </label>
            <input type="text" name="url">
        </div>
        <div>
            <label for="">content: </label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>