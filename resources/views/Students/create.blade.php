<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <title>Create Student</title>
    </head>
    <body>
        <h1>Create New Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required>
            <input type="text" name="prodi" placeholder="Prodi" required>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>