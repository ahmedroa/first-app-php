<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        @if ($name === 'Alice')
       <dev style="color: red;">Welcome back, Alice!</dev>
        @elseif ($name === 'ahmed')
       <dev style="color: blue;">Hello Bob, good to see you!</dev>
        @endif

    
    <h1>Hello, {{ $name }}!</h1>

    
</body>
</html>