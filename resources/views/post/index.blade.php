Index!!!
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブログ</title>
</head>

<body>
    <header>
    </header>
    <main>
        <form action="/posts" method="post">
            @csrf
            <input type="text" name="title" />
            <input type="text" name="content" />
            <button type="submit">
                送信
            </button>
        </form>
        @if ($posts->isNotempty())
        <p>中身があるよ</p>
        @endif
    </main>
    <footer>
    </footer>
</body>

</html>