<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    @if (is_numeric($a.$b))
    <h1>{{$a-$b}}</h1>
    <h1>{{$a+$b}}</h1>

    @else
    ERROR
        
    @endif

   
    
</body>
</html>