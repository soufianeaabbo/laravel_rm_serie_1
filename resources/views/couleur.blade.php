<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$c}}</h1>

    <ul>
        {!!$c == 'orange' ? '<li><b>orange</b></li>' : '<li>orange</li>'!!}
        {!!$c == 'bleu' ? '<li><b>bleu</b></li>' : '<li>bleu</li>'!!}
        {!!$c == 'jaune' ? '<li><b>jaune</b></li>' : '<li>jaune</li>'!!}
        {!!$c == 'mauve' ? '<li><b>mauve</b></li>' : '<li>mauve</li>'!!}
    </ul>
</body>
</html>