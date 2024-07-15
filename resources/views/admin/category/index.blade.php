<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Category</h1>
    <table border="1">
        <tr>
            <th>#ID</th>
            <th>NAME</th>
            <th>
                <a href="#">ADD</a>
            </th>
        </tr>
        @foreach ($categories as $cate)
        <tr>
            <td>{{ $cate->id }}</td>
            <td>{{ $cate->name }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>