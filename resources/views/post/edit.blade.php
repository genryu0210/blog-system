<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <input class="border"  type="text" value="{{$posts->title}}">
    <input type="text" value="{{$posts->content}}">
</body>
</html>