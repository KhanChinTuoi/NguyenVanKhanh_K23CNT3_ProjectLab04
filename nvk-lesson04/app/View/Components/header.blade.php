<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>this is Header Component</h1>
        <h3>welcome to, {{ $name }}</h3>
        <h3>fruits are: </h3>
        <ul>
        @foreach ($fruits as $item)
            <li>{{ $item }}</li>
        @endforeach
        </ul>
    </div>
</body>
</html>