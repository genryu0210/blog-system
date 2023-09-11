<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="container mx-auto mt-10 p-5">
        <form action="/posts" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    タイトル
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="タイトル">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    コンテンツ
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline h-56" id="content" name="content" placeholder="コンテンツ"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    投稿
                </button>
            </div>
        </form>
    </div>
    @if ($posts->isNotEmpty())
    <p class="text-xl font-bold text-black-500 ">過去の投稿</p>
    @foreach ($posts as $post)
    <div class="border border-gray-300 mb-4">
        <h2 class="text-l font-bold">{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
    @endforeach
    @else
    <p class="text-red-500">データがありません</p>
    @endif


</body>

</html>